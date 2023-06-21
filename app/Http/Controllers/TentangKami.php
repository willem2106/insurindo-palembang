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
use Illuminate\Support\Facades\Storage;

class TentangKami extends Controller
{
    public function index()
    {
        $sejarah = Sejarah::whereNull('deleted_at')->get();
        $visi = Visi::whereNull('deleted_at')->get();
        $misi = Misi::whereNull('deleted_at')->get();
        $organisasi = Organisasi::whereNull('deleted_at')->get();

        $data = [
            'sejarah' => $sejarah,
            'visi' => $visi,
            'misi' => $misi,
            'organisasi' => $organisasi,
        ];
        return view('admin/tentang', $data);
    }

    public function postAdd(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'addOption' => 'required',
            'konten' => 'required',
            'media' => 'nullable|file|mimes:jpeg,jpg,png,mp4|max:10000',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->with([
                'error' => 'Please complete the field data.',
            ]);
        }

        $randomNumber = rand(0, 9999);

        switch ($request->addOption) {
            case '1':
                $tentang = new Sejarah();
                $tentang->konten = $request->konten;

                if ($request->hasFile('media')) {
                    $media = $request->file('media');
                    $extension = $media->getClientOriginalExtension();
                    $filename = '[tentang] Sejarah-' . $randomNumber . '.' . $extension;
                    $media->move('uploads/tentang/Sejarah/', $filename);
                    $filenamepath = 'uploads/tentang/Sejarah/' . $filename;
                    $tentang->gambar_path = $filenamepath;
                }
                break;

            case '21':
                $tentang = new Visi();
                $tentang->konten = $request->konten;
                break;

            case '22':
                $tentang = new Misi();
                $tentang->konten = $request->konten;

                if ($request->hasFile('media')) {
                    $media = $request->file('media');
                    $extension = $media->getClientOriginalExtension();
                    $filename = '[tentang] Misi-' . $randomNumber . '.' . $extension;
                    $media->move('uploads/tentang/Misi/', $filename);
                    $filenamepath = 'uploads/tentang/Misi/' . $filename;
                    $tentang->gambar_path = $filenamepath;
                }
                break;

            default:
                $tentang = new Organisasi();
                $tentang->konten = $request->konten;

                if ($request->hasFile('media')) {
                    $media = $request->file('media');
                    $extension = $media->getClientOriginalExtension();
                    $filename = '[tentang] Organisasi-' . $randomNumber . '.' . $extension;
                    $media->move('uploads/tentang/Organisasi/', $filename);
                    $filenamepath = 'uploads/tentang/Organisasi/' . $filename;
                    $tentang->gambar_path = $filenamepath;
                }
                break;
        }

        $tentang->save();

        return redirect()->back()->with([
            'status' => 'Successfully added data.',
        ]);
    }



    public function postEdit(Request $request)
    {
        if ($request->editOption == '3') {
            $validator = Validator::make($request->all(), [
                'editOption' => 'required',
                'editID' => 'required',
            ]);
        } else {
            $validator = Validator::make($request->all(), [
                'editOption' => 'required',
                'editID' => 'required',
                'konten' => 'required',
                'media' => 'nullable|file|mimes:jpeg,jpg,png,mp4|max:10000',
            ]);
        }

        if ($validator->fails()) {
            return redirect()->back()->with([
                'error' => 'Please complete the field data.',
            ]);
        }

        $randomNumber = rand(0, 9999) - 50;

        switch ($request->editOption) {
            case '1':
                $tentang = Sejarah::find($request->editID);
                $tentang->konten = $request->konten;

                if ($request->hasFile('media')) {
                    $oldMediaPath = $tentang->gambar_path;

                    if ($oldMediaPath) {
                        // Menghapus file media yang lama jika ada
                        Storage::delete($oldMediaPath);
                    }

                    $media = $request->file('media');
                    $extension = $media->getClientOriginalExtension();
                    $filename = '[tentang] Sejarah-' . $randomNumber . '.' . $extension;
                    $media->storeAs('uploads/tentang/Sejarah', $filename);
                    $filenamepath = 'uploads/tentang/Sejarah/' . $filename;
                    $tentang->gambar_path = $filenamepath;
                }
                break;

            case '21':
                $tentang = Visi::find($request->editID);
                $tentang->konten = $request->konten;
                break;

            case '22':
                $tentang = Misi::find($request->editID);
                $tentang->konten = $request->konten;

                if ($request->hasFile('media')) {
                    $oldMediaPath = $tentang->gambar_path;

                    if ($oldMediaPath) {
                        // Menghapus file media yang lama jika ada
                        Storage::delete($oldMediaPath);
                    }

                    $media = $request->file('media');
                    $extension = $media->getClientOriginalExtension();
                    $filename = '[tentang] Misi-' . $randomNumber . '.' . $extension;
                    $media->storeAs('uploads/tentang/Misi', $filename);
                    $filenamepath = 'uploads/tentang/Misi/' . $filename;
                    $tentang->gambar_path = $filenamepath;
                }
                break;

            default:
                $tentang = Organisasi::find($request->editID);
                $tentang->konten = $request->konten;

                if ($request->hasFile('media')) {
                    $oldMediaPath = $tentang->gambar_path;

                    if ($oldMediaPath) {
                        // Menghapus file media yang lama jika ada
                        Storage::delete($oldMediaPath);
                    }

                    $media = $request->file('media');
                    $extension = $media->getClientOriginalExtension();
                    $filename = '[tentang] Organisasi-' . $randomNumber . '.' . $extension;
                    $media->storeAs('uploads/tentang/Organisasi', $filename);
                    $filenamepath = 'uploads/tentang/Organisasi/' . $filename;
                    $tentang->gambar_path = $filenamepath;
                }
                break;
        }

        $tentang->save();

        return redirect()->back()->with([
            'status' => 'Successfully edited data.',
        ]);
    }









    public function postDelete(Request $request)
    {
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
