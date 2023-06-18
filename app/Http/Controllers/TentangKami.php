<?php

namespace App\Http\Controllers;

use App\Models\Misi;
use App\Models\Sejarah;
use App\Models\Organisasi;
use App\Models\Visi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class TentangKami extends Controller
{
    public function index()
    {
        $sejarah = Sejarah::whereNull('deleted_at')->get();
        $visi = Visi::whereNull('deleted_at')->get();
        $misi = Misi::whereNull('deleted_at')->get();
        $organisasi = Organisasi::whereNull('deleted_at')->get();

        $data =[
            'sejarah' => $sejarah,
            'visi' => $visi,
            'misi' => $misi,
            'organisasi' => $organisasi,
        ];
        return view('admin/tentang', $data);
    }

    public function postAdd(Request $request){
        // dd($request->all());
        if ($request->addOption == '3') {
            $validator = Validator::make($request->all(), [
                'addOption'=> ['required'],
                'gambar'=> ['required', 'file', 'mimes:jpeg,png'],
            ]);
        } else if ($request->addOption != '21') {
            $validator = Validator::make($request->all(), [
                'addOption'=> ['required'],
                'konten'=> ['required'],
                'gambar'=> ['required', 'file', 'mimes:jpeg,png'],
            ]);
        } else {
            $validator = Validator::make($request->all(), [
                'addOption'=> ['required'],
                'konten'=> ['required'],
            ]);
        }

        if ($validator->fails()) {
            return Redirect::back()->with([
                'error' => 'Please complete the field data.',
            ]);
        }

        $file = $request->gambar;
        $randomNumber = rand(0, 9999);

        switch ($request->addOption) {
            case '1':
                $tentang = new Sejarah;
                $extension = $file->getClientOriginalExtension();
                $filename = '[tentang] Sejarah-' . $randomNumber . '.'.$extension;
                $file->move('uploads/tentang/Sejarah/',$filename);
                $filenamepath = 'uploads/tentang/Sejarah/' . $filename;
                $tentang->gambar_path = $filenamepath;
                $tentang->konten = $request->konten;
                break;

            case '21':
                $tentang = new Visi;
                $tentang->konten = $request->konten;
                break;

            case '22':
                $tentang = new Misi;
                $extension = $file->getClientOriginalExtension();
                $filename = '[tentang] Misi-' . $randomNumber . '.'.$extension;
                $file->move('uploads/tentang/Misi/',$filename);
                $filenamepath = 'uploads/tentang/Misi/' . $filename;
                $tentang->gambar_path = $filenamepath;
                $tentang->konten = $request->konten;
                break;

            default:
                $tentang = new Organisasi;
                $extension = $file->getClientOriginalExtension();
                $filename = '[tentang] Organisasi-' . $randomNumber . '.'.$extension;
                $file->move('uploads/tentang/Organisasi/',$filename);
                $filenamepath = 'uploads/tentang/Organisasi/' . $filename;
                $tentang->gambar_path = $filenamepath;
                break;
        }


        $tentang->save();

        return Redirect::back()->with([
            'status' => 'Successfully added data.'
        ]);
    }

    public function postEdit(Request $request){
        // dd($request->all());
        if ($request->editOption == '3') {
            $validator = Validator::make($request->all(), [
                'editOption'=> ['required'],
                'editID'=> ['required'],
            ]);
        } else {
            $validator = Validator::make($request->all(), [
                'editOption'=> ['required'],
                'editID'=> ['required'],
                'konten'=> ['required'],
            ]);
        }
        if ($validator->fails()) {
            return Redirect::back()->with([
                'error' => 'Please complete the field data.',
            ]);
        }

        $randomNumber = rand(0, 9999);

        switch ($request->editOption) {
            case '1':
                $tentang = Sejarah::where('id', $request->editID)->first();
                $tentang->konten = $request->konten;

                if ($request->gambar != null) {
                    $validator = Validator::make($request->all(), [
                        'gambar'=> ['required', 'file', 'mimes:jpeg,png'],
                    ]);
                    if ($validator->fails()) {
                        return Redirect::back()->with([
                            'error' => 'Please input valid image data.',
                        ]);
                    }

                    $path = $tentang->gambar_path;
                    if (File::exists($path)) {
                            File::delete($path);
                    }

                    $file = $request->gambar;
                    $extension = $file->getClientOriginalExtension();
                    $filename = '[tentang] Sejarah-' . $randomNumber . '.'.$extension;
                    $file->move('uploads/tentang/Sejarah/',$filename);
                    $filenamepath = 'uploads/tentang/Sejarah/' . $filename;
                    $tentang->gambar_path = $filenamepath;
                }
                $tentang->save();
                break;

            case '21':
                $tentang = Visi::where('id', $request->editID)->first();
                $tentang->konten = $request->konten;
                $tentang->save();
                break;

            case '22':
                $tentang = Misi::where('id', $request->editID)->first();
                $tentang->konten = $request->konten;

                if ($request->gambar != null) {
                    $validator = Validator::make($request->all(), [
                        'gambar'=> ['required', 'file', 'mimes:jpeg,png'],
                    ]);
                    if ($validator->fails()) {
                        return Redirect::back()->with([
                            'error' => 'Please input valid image data.',
                        ]);
                    }

                    $path = $tentang->gambar_path;
                    if (File::exists($path)) {
                            File::delete($path);
                    }

                    $file = $request->gambar;
                    $extension = $file->getClientOriginalExtension();
                    $filename = '[tentang] Sejarah-' . $randomNumber . '.'.$extension;
                    $file->move('uploads/tentang/Sejarah/',$filename);
                    $filenamepath = 'uploads/tentang/Sejarah/' . $filename;
                    $tentang->gambar_path = $filenamepath;
                }
                $tentang->save();
                break;

            default:
                $tentang = Organisasi::where('id', $request->editID)->first();

                if ($request->gambar != null) {
                    $validator = Validator::make($request->all(), [
                        'gambar'=> ['required', 'file', 'mimes:jpeg,png'],
                    ]);
                    if ($validator->fails()) {
                        return Redirect::back()->with([
                            'error' => 'Please input valid image data.',
                        ]);
                    }

                    $path = $tentang->gambar_path;
                    if (File::exists($path)) {
                            File::delete($path);
                    }

                    $file = $request->gambar;
                    $extension = $file->getClientOriginalExtension();
                    $filename = '[tentang] Sejarah-' . $randomNumber . '.'.$extension;
                    $file->move('uploads/tentang/Sejarah/',$filename);
                    $filenamepath = 'uploads/tentang/Sejarah/' . $filename;
                    $tentang->gambar_path = $filenamepath;
                }
                $tentang->save();
                break;
        }

        return Redirect::back()->with([
            'status' => 'Successfully edited data.'
        ]);
    }

    public function postDelete(Request $request) {
        // dd($request->all());

        switch ($request->editOption) {
            case '1':
                $tentang = Sejarah::where('id', $request->id)->first();

                $paths = $tentang->gambar_path;
                if (is_array($paths)) {
                    foreach ($paths as $path) {
                        if (File::exists($path)) {
                            File::delete($path);
                        }
                    }
                } else {
                    if (File::exists($paths)) {
                        File::delete($paths);
                    }
                }

                $tentang->forceDelete();
                break;

            case '21':
                $tentang = Visi::where('id', $request->id)->first();
                $tentang->forceDelete();
                break;

            case '22':
                $tentang = Misi::where('id', $request->id)->first();

                $paths = $tentang->gambar_path;
                if (is_array($paths)) {
                    foreach ($paths as $path) {
                        if (File::exists($path)) {
                            File::delete($path);
                        }
                    }
                } else {
                    if (File::exists($paths)) {
                        File::delete($paths);
                    }
                }

                $tentang->forceDelete();
                break;

            default:
                $tentang = Organisasi::where('id', $request->id)->first();

                $paths = $tentang->gambar_path;
                if (is_array($paths)) {
                    foreach ($paths as $path) {
                        if (File::exists($path)) {
                            File::delete($path);
                        }
                    }
                } else {
                    if (File::exists($paths)) {
                        File::delete($paths);
                    }
                }

                $tentang->forceDelete();
                break;

    }

        return Redirect::back()->with([
            'status' => 'Successfully delete data.'
        ]);
    }
}
