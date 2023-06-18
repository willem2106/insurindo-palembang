<?php

namespace App\Http\Controllers;

use App\Models\Karir_Detail;
use App\Models\Karir_Detail_Syarat;
use App\Models\Karir_Main;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class Karir extends Controller
{
    public function index()
    {
        $karir = Karir_main::whereNull('deleted_at')->get();

        $data =[
            'karir' => $karir,
        ];
        return view('admin/karir/home', $data);
    }
    public function detail($id_main)
    {
        $details = Karir_Detail::where('id_main', $id_main)->get();
        $syarat = Karir_Detail_Syarat::where('id_main', $id_main)->get();

        $data = [
            'id_main' => $id_main,
            'details' => $details,
            'syarat' => $syarat,
        ];

        return view('admin/karir/detail', $data);
    }

    public function postAdd(Request $request){
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'karir'=> ['required'],
            'kategori'=> ['required'],
            'tipe'=> ['required'],
            'lokasi'=> ['required'],
            'keterangan'=> ['required'],
            'gaji'=> ['required'],
        ]);

        if ($validator->fails()) {
            return Redirect::back()->with([
                'error' => 'Please complete the field data.',
            ]);
        }

        $karir = new Karir_Main;
        $karir->karir = $request->karir;
        $karir->kategori = $request->kategori;
        $karir->tipe = $request->tipe;
        $karir->lokasi = $request->lokasi;
        $karir->keterangan = $request->keterangan;
        $karir->gaji = $request->gaji;

        $karir->save();

        return Redirect::back()->with([
            'status' => 'Successfully added data.'
        ]);
    }

    public function postEdit(Request $request){
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'karir'=> ['required'],
            'kategori'=> ['required'],
            'tipe'=> ['required'],
            'lokasi'=> ['required'],
            'keterangan'=> ['required'],
            'gaji'=> ['required'],
        ]);

        if ($validator->fails()) {
            return Redirect::back()->with([
                'error' => 'Please complete the field data.',
            ]);
        }

        $karir = Karir_Main::where('id', $request->id)->first();
        $karir->karir = $request->karir;
        $karir->kategori = $request->kategori;
        $karir->tipe = $request->tipe;
        $karir->lokasi = $request->lokasi;
        $karir->keterangan = $request->keterangan;
        $karir->gaji = $request->gaji;

        $karir->save();

        return Redirect::back()->with([
            'status' => 'Successfully edited data.'
        ]);
    }

    public function postDelete(Request $request){
        // dd($request->all());

        $karir = Karir_Main::where('id', $request->id)->first();

        $karir->forceDelete();

        return Redirect::back()->with([
            'status' => 'Successfully delete data.'
        ]);
    }

    public function postAddDetail(Request $request){
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'addValue'=> ['required'],
        ]);

        if ($validator->fails()) {
            return Redirect::back()->with([
                'error' => 'Please complete the field data.',
            ]);
        }

        switch ($request->idOpt) {
            case '1':
                $karir = new Karir_Detail;
                $karir->id_main = $request->idMain;
                $karir->pendaftaran = $request->addValue;
                break;

                default:
                $karir = new Karir_Detail_Syarat;
                $karir->id_main = $request->idMain;
                $karir->syarat = $request->addValue;
                break;
        }

        $karir->save();

        return Redirect::back()->with([
            'status' => 'Successfully added data.'
        ]);
    }

    public function postEditDetail(Request $request){
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'editValue'=> ['required'],
        ]);

        if ($validator->fails()) {
            return Redirect::back()->with([
                'error' => 'Please complete the field data.',
            ]);
        }

        switch ($request->idOpt) {
            case '1':
                $karir = Karir_Detail::where('id', $request->id)->first();
                $karir->pendaftaran = $request->editValue;
                break;

                default:
                $karir = Karir_Detail_Syarat::where('id', $request->id)->first();
                $karir->syarat = $request->editValue;
                break;
        }

        $karir->save();

        return Redirect::back()->with([
            'status' => 'Successfully edited data.'
        ]);
    }

    public function postDeleteDetail(Request $request){
        // dd($request->all());

        switch ($request->idOpt) {
            case '1':
                $karir = Karir_Detail::where('id', $request->id)->first();
                $karir->forceDelete();
                break;

                default:
                $karir = Karir_Detail_Syarat::where('id', $request->id)->first();
                $karir->forceDelete();
                break;
        }

        return Redirect::back()->with([
            'status' => 'Successfully delete data.'
        ]);
    }
}
