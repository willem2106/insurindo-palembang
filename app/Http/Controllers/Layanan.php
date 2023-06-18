<?php

namespace App\Http\Controllers;

use App\Models\Layanan_Detail;
use App\Models\Layanan_Main;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class Layanan extends Controller
{
    public function index()
    {
        $layanan = Layanan_Main::whereNull('deleted_at')->get();

        $data = [
            'layanan' => $layanan,
        ];
        return view('admin/layanan/home', $data);
    }
    public function detail($id_main)
    {
        $details = Layanan_Detail::where('id_main', $id_main)->get();

        $data = [
            'id_main' => $id_main,
            'details' => $details,
        ];
        return view('admin/layanan/detail', $data);
    }

    public function postAdd(Request $request){
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'jenis'=> ['required'],
            'gambar'=> ['required', 'file', 'mimes:jpeg,png']
        ]);

        if ($validator->fails()) {
            return Redirect::back()->with([
                'error' => 'Please complete the field data.',
            ]);
        }

        $layanan = new Layanan_Main;
        $layanan->jenis = $request->jenis;

        $file = $request->gambar;
        $extension = $file->getClientOriginalExtension();
        $randomNumber = rand(0, 9999);
        $filename = '[layanan] Main-' . $randomNumber . '.'.$extension;
        $file->move('uploads/layanan/Main/',$filename);
        $filenamepath = 'uploads/layanan/Main/' . $filename;
        $layanan->gambar_path = $filenamepath;

        $layanan->save();

        return Redirect::back()->with([
            'status' => 'Successfully added data.'
        ]);
    }

    public function postEdit(Request $request){
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'jenis'=> ['required'],
        ]);

        if ($validator->fails()) {
            return Redirect::back()->with([
                'error' => 'Please complete the field data.',
            ]);
        }

        $layanan = Layanan_Main::where('id', $request->id)->first();
        $layanan->jenis = $request->jenis;

        if ($request->gambar != null) {
            $validator = Validator::make($request->all(), [
                'gambar'=> ['required', 'file', 'mimes:jpeg,png']
            ]);
            if ($validator->fails()) {
                return Redirect::back()->with([
                    'error' => 'Please input the valid data.',
                ]);
            }

            $path = $layanan->gambar_path;
            if (File::exists($path)) {
                File::delete($path);
            }

            $file = $request->gambar;
            $extension = $file->getClientOriginalExtension();
            $randomNumber = rand(0, 9999);
            $filename = '[layanan] Main-' . $randomNumber . '.'.$extension;
            $file->move('uploads/layanan/Main/',$filename);
            $filenamepath = 'uploads/layanan/Main/' . $filename;
            $layanan->gambar_path = $filenamepath;
        }

        $layanan->save();

        return Redirect::back()->with([
            'status' => 'Successfully edited data.'
        ]);
    }

    public function postDelete(Request $request){
        // dd($request->all());

        $tentang = Layanan_Main::where('id', $request->id)->first();

        $path = $tentang->gambar_path;
        if (File::exists($path)) {
            File::delete($path);
        }

        $tentang->forceDelete();

        return Redirect::back()->with([
            'status' => 'Successfully delete data.'
        ]);
    }

    public function postAddDetail(Request $request){
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'judul'=> ['required'],
            'konten'=> ['required'],
            'gambar'=> ['required', 'file', 'mimes:jpeg,png']
        ]);

        if ($validator->fails()) {
            return Redirect::back()->with([
                'error' => 'Please complete the field data.',
            ]);
        }

        $layanan = new Layanan_Detail;
        $layanan->id_main = $request->idMain;
        $layanan->judul = $request->judul;
        $layanan->konten = $request->konten;

        $file = $request->gambar;
        $extension = $file->getClientOriginalExtension();
        $randomNumber = rand(0, 9999);
        $filename = '[layanan] Detail-' . $randomNumber . '.'.$extension;
        $file->move('uploads/layanan/Detail/',$filename);
        $filenamepath = 'uploads/layanan/Detail/' . $filename;
        $layanan->gambar_path = $filenamepath;

        $layanan->save();

        return Redirect::back()->with([
            'status' => 'Successfully added data.'
        ]);
    }

    public function postEditDetail(Request $request){
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'judul'=> ['required'],
            'konten'=> ['required'],
        ]);

        if ($validator->fails()) {
            return Redirect::back()->with([
                'error' => 'Please complete the field data.',
            ]);
        }

        $layanan = Layanan_Detail::where('id', $request->id)->first();
        $layanan->judul = $request->judul;
        $layanan->konten = $request->konten;

        if ($request->gambar != null) {
            $validator = Validator::make($request->all(), [
                'gambar'=> ['required', 'file', 'mimes:jpeg,png']
            ]);
            if ($validator->fails()) {
                return Redirect::back()->with([
                    'error' => 'Please input the valid data.',
                ]);
            }

            $path = $layanan->gambar_path;
            if (File::exists($path)) {
                File::delete($path);
            }

            $file = $request->gambar;
            $extension = $file->getClientOriginalExtension();
            $randomNumber = rand(0, 9999);
            $filename = '[layanan] Detail-' . $randomNumber . '.'.$extension;
            $file->move('uploads/layanan/Detail/',$filename);
            $filenamepath = 'uploads/layanan/Detail/' . $filename;
            $layanan->gambar_path = $filenamepath;
        }

        $layanan->save();

        return Redirect::back()->with([
            'status' => 'Successfully edited data.'
        ]);
    }

    public function postDeleteDetail(Request $request){
        // dd($request->all());

        $tentang = Layanan_Detail::where('id', $request->id)->first();

        $path = $tentang->gambar_path;
        if (File::exists($path)) {
            File::delete($path);
        }

        $tentang->forceDelete();

        return Redirect::back()->with([
            'status' => 'Successfully delete data.'
        ]);
    }

}
