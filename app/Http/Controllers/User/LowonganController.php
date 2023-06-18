<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Karir_Detail;
use App\Models\Karir_Detail_Syarat;
use App\Models\Karir_Main;
use Illuminate\Http\Request;

class LowonganController extends Controller
{
    public function showLowongann(){
        $karir = Karir_Main::whereNull('deleted_at')->get();

        $data =[
            'karir' => $karir,
        ];
        return view('user.lowongan.lowonganKami', $data);
    }
    public function showDetail($id_main){
        $karir = Karir_Main::where('id', $id_main)->first();
        $details = Karir_Detail::where('id_main', $id_main)->get();
        $syarat = Karir_Detail_Syarat::where('id_main', $id_main)->get();

        $data = [
            'karir' => $karir,
            'details' => $details,
            'syarat' => $syarat,
        ];
        return view('user.lowongan.detail', $data);
    }
}
