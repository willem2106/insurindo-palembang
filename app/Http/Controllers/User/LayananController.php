<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Layanan_Detail;
use App\Models\Layanan_Main;
use Illuminate\Http\Request;

class LayananController extends Controller
{
    public function showlayananKami(){
        $layanan = Layanan_Main::whereNull('deleted_at')->get();

        $data = [
            'layanan' => $layanan,
        ];
        return view('user.layanan-kami.layananKami', $data);
    }
    public function showlayananDetail($id_main){
        $layanan = Layanan_Main::where('id', $id_main)->first();
        $detail = Layanan_Detail::where('id_main', $id_main)->get();

        $data = [
            'layanan' => $layanan,
            'detail' => $detail,
        ];
        return view('user.layanan-kami.layanandetail', $data);
    }
    public function showbulkCargo(){
        return view('user.layanan-kami.bulkcargo');
    }

    public function search (Request $request){
        $title = $request->input('search');
        // $layanan = Layanan_Main::whereNull('deleted_at')
        // ->get();

        if($title == "sejarah" || $title == "insurindo" || $title == "palembang"){
            return redirect('../about-us/sejarah');
        }

        else if($title == "visi" || $title == "misi"){
            return redirect('../about-us/visi-misi');
        }

        else if($title == "struktur" || $title == "organisasi"){
            return redirect('../about-us/struktur');
        }

        else if($title == "kantor" || $title == "pusat"){
            return redirect('../about-us/kantor-pusat');
        }

        else if($title == "cabang"){
            return redirect('../about-us/kantor-cabang');
        }

        else if($title == "lab" || $title == "laboratorium" || $title == "pengujian"){
            return redirect('../unit/lab');
        }

        else if($title == "layanan" || $title == "kalibrasi"){
            return redirect('../unit/kalibrasi');
        }


        else if($title == "kontak" || $title == "lokasi" || $title == "email" || $title == "telepon" || $title == "map"){
            return redirect('../kontak');
        }

        else{
            $results = Layanan_Main::where('jenis', 'like', '%' . $title . '%')->get();
            $data = [
                'layanan' => $results,
            ];
            return view('user.layanan-kami.layananKami', $data);
        }
    }
}
