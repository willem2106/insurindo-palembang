<?php

namespace App\Http\Controllers;

use App\Models\Kalibrasi;
use App\Models\Kantor_Cabang;
use App\Models\Kantor_Pusat;
use App\Models\Laboratorium;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class Unit extends Controller
{
    public function index()
    {
        $pusat = Kantor_Pusat::whereNull('deleted_at')->get();
        $cabang = Kantor_Cabang::whereNull('deleted_at')->get();
        $laboratorium = Laboratorium::whereNull('deleted_at')->get();
        $kalibrasi = Kalibrasi::whereNull('deleted_at')->get();

        $data =[
            'pusat' => $pusat,
            'cabang' => $cabang,
            'laboratorium' => $laboratorium,
            'kalibrasi' => $kalibrasi,
        ];
        return view('admin/unit', $data);
    }

    public function postAdd(Request $request){
        // dd($request->all());
        if($request->addOption == 1){
            $validator = Validator::make($request->all(), [
                'keterangan'=> ['required'],
                'gambar'=> ['required', 'file', 'mimes:jpeg,png'],
            ]);
        } else {
            $validator = Validator::make($request->all(), [
                'nama'=> ['required'],
                'alamat'=> ['required'],
                'telepon'=> ['required'],
                'email'=> ['required'],
            ]);
        }

        if ($validator->fails()) {
            return Redirect::back()->with([
                'error' => 'Please complete the field data.',
            ]);
        }

        switch ($request->addOption) {
            case '1':
                $unit = new Kantor_Pusat;
                $unit->keterangan = $request->keterangan;

                $file = $request->gambar;
                $extension = $file->getClientOriginalExtension();
                $randomNumber = rand(0, 9999);
                $filename = '[unit] KantorPusat-' . $randomNumber . '.'.$extension;
                $file->move('uploads/unit/KantorPusat/',$filename);
                $filenamepath = 'uploads/unit/KantorPusat/' . $filename;
                $unit->gambar_path = $filenamepath;
                break;

            case '2':
                $unit = new Kantor_Cabang;
                $unit->nama = $request->nama;
                $unit->alamat = $request->alamat;
                $unit->telepon = $request->telepon;
                $unit->email = $request->email;
                break;
            case '3':
                $unit = new Laboratorium;
                $unit->nama = $request->nama;
                $unit->alamat = $request->alamat;
                $unit->telepon = $request->telepon;
                $unit->email = $request->email;
                break;

            default:
                $unit = new Kalibrasi;
                $unit->nama = $request->nama;
                $unit->alamat = $request->alamat;
                $unit->telepon = $request->telepon;
                $unit->email = $request->email;
                break;
        }

        $unit->save();

        return Redirect::back()->with([
            'status' => 'Successfully added data.'
        ]);
    }

    public function postEdit(Request $request){
        // dd($request->all());
        if($request->editOption == 1){
            $validator = Validator::make($request->all(), [
                'keterangan'=> ['required'],
            ]);
        } else {
            $validator = Validator::make($request->all(), [
                'nama'=> ['required'],
                'alamat'=> ['required'],
                'telepon'=> ['required'],
                'email'=> ['required'],
            ]);
        }

        if ($validator->fails()) {
            return Redirect::back()->with([
                'error' => 'Please complete the field data.',
            ]);
        }

        switch ($request->editOption) {
            case '1':
                $unit = Kantor_Pusat::where('id', $request->editID)->first();
                $unit->keterangan = $request->keterangan;

                if ($request->gambar != null) {
                    $validator = Validator::make($request->all(), [
                        'gambar'=> ['required', 'file', 'mimes:jpeg,png'],
                    ]);
                    if ($validator->fails()) {
                        return Redirect::back()->with([
                            'error' => 'Please input valid image data.',
                        ]);
                    }

                    $path = $unit->gambar_path;
                    if (File::exists($path)) {
                        File::delete($path);
                    }

                    $file = $request->gambar;
                    $randomNumber = rand(0, 9999);
                    $extension = $file->getClientOriginalExtension();
                    $filename = '[unit] KantorPusat-' . $randomNumber . '.'.$extension;
                    $file->move('uploads/unit/KantorPusat/',$filename);
                    $filenamepath = 'uploads/unit/KantorPusat/' . $filename;
                    $unit->gambar_path = $filenamepath;
                }
                $unit->save();
                break;

            case '2':
                $unit = Kantor_Cabang::where('id', $request->editID)->first();
                $unit->nama = $request->nama;
                $unit->alamat = $request->alamat;
                $unit->telepon = $request->telepon;
                $unit->email = $request->email;

                $unit->save();
                break;

            case '3':
                $unit = Laboratorium::where('id', $request->editID)->first();
                $unit->nama = $request->nama;
                $unit->alamat = $request->alamat;
                $unit->telepon = $request->telepon;
                $unit->email = $request->email;

                $unit->save();
                break;

            default:
                $unit = Kalibrasi::where('id', $request->editID)->first();
                $unit->nama = $request->nama;
                $unit->alamat = $request->alamat;
                $unit->telepon = $request->telepon;
                $unit->email = $request->email;

                $unit->save();
                break;
        }

        return Redirect::back()->with([
            'status' => 'Successfully edited data.'
        ]);
    }

    public function postDelete(Request $request){
        // dd($request->all());

        switch ($request->option) {
            case '1':
                $tentang = Kantor_Pusat::where('id', $request->id)->first();

                $path = $tentang->gambar_path;
                if (File::exists($path)) {
                    File::delete($path);
                }

                $tentang->forceDelete();
                break;

            case '2':
                $tentang = Kantor_Cabang::where('id', $request->id)->first();
                $tentang->forceDelete();
                break;

            case '3':
                $tentang = Laboratorium::where('id', $request->id)->first();
                $tentang->forceDelete();
                break;

            default:
                $tentang = Kalibrasi::where('id', $request->id)->first();
                $tentang->forceDelete();
                break;
        }

        return Redirect::back()->with([
            'status' => 'Successfully delete data.'
        ]);
    }
}
