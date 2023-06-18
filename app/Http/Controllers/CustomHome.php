<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class CustomHome extends Controller
{
    public function index()
    {
        $konten = Home::whereNull('deleted_at')->get();

        $data = [
            'konten' => $konten,
        ];

        // dd($data);
        return view('admin.home', $data);
    }

    public function postAdd(Request $request){
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'judul'=> ['required', 'unique:home'],
            'gambar'=> ['required', 'file', 'mimes:jpeg,png'],
        ]);

        if ($validator->fails()) {
            return Redirect::back()->with([
                'error' => 'Please complete the field data.',
            ]);
        }

        $home = new Home;
        $home->judul = $request->judul;

        $file = $request->gambar;
        $extension = $file->getClientOriginalExtension();
        $filename = '[home] '.$request->judul.'.'.$extension;
        $file->move('uploads/home/',$filename);
        $filenamepath = 'uploads/home/' . $filename;
        $home->gambar_path = $filenamepath;

        $home->save();

        return Redirect::back()->with([
            'status' => 'Successfully added data.'
        ]);
    }

    public function postEdit(Request $request){
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'judul'=> ['required'],
        ]);
        if ($validator->fails()) {
            return Redirect::back()->with([
                'error' => 'Please complete the field data.',
            ]);
        }

        $home = Home::where('id', $request->idEdit)->first();
        $home->judul = $request->judul;

        if ($request->gambar != null) {
            $validator = Validator::make($request->all(), [
                'gambar'=> ['required', 'file', 'mimes:jpeg,png'],
            ]);
            if ($validator->fails()) {
                return Redirect::back()->with([
                    'error' => 'Please input valid image data.',
                ]);
            }

            $path = $home->gambar_path;
            if (File::exists($path)) {
                    File::delete($path);
            }

            $file = $request->gambar;
            $extension = $file->getClientOriginalExtension();
            $filename = '[home] '.$request->judul.'.'.$extension;
            $file->move('uploads/home/',$filename);
            $filenamepath = 'uploads/home/' . $filename;
            $home->gambar_path = $filenamepath;
        }

        $home->save();

        return Redirect::back()->with([
            'status' => 'Successfully edited data.'
        ]);
    }

    public function postDelete(Request $request){
        // dd($request->all());

        $home = Home::where('id', $request->id)->first();

        $path = $home->gambar_path;
        if (File::exists($path)) {
            File::delete($path);
        }

        $home->forceDelete();

        return Redirect::back()->with([
            'status' => 'Successfully delete data.'
        ]);
    }
}
