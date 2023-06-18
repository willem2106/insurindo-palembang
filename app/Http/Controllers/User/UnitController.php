<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Kalibrasi;
use App\Models\Kantor_Cabang;
use App\Models\Laboratorium;
use Illuminate\Http\Request;

class UnitController extends Controller
{
    public function showKantorPusat(){  //a
        return view('user.unit.kantor-pusat');   //b
    }

    public function showKantorCabang(){
        $cabang = Kantor_Cabang::whereNull('deleted_at')->get();

        $data = [
            'cabang' => $cabang,
        ];
        return view('user.unit.kantor-cabang', $data);
    }

    public function showLab(){
        $lab = Laboratorium::whereNull('deleted_at')->get();

        $data = [
            'lab' => $lab,
        ];
        return view('user.unit.lab', $data);
    }

    public function showKalibrasi(){
        $kalibrasi = Kalibrasi::whereNull('deleted_at')->get();

        $data = [
            'kalibrasi' => $kalibrasi,
        ];
        return view('user.unit.kalibrasi', $data);
    }


    public function en_showKantorPusat(){  //a
        return view('user.en.unit.kantor-pusat');   //b
    }

    public function en_showKantorCabang(){
        $cabang = Kantor_Cabang::whereNull('deleted_at')->get();

        $data = [
            'cabang' => $cabang,
        ];
        return view('user.en.unit.kantor-cabang', $data);
    }

    public function en_showLab(){
        $lab = Laboratorium::whereNull('deleted_at')->get();

        $data = [
            'lab' => $lab,
        ];
        return view('user.en.unit.lab', $data);
    }

    public function en_showKalibrasi(){
        $kalibrasi = Kalibrasi::whereNull('deleted_at')->get();

        $data = [
            'kalibrasi' => $kalibrasi,
        ];
        return view('user.en.unit.kalibrasi', $data);
    }
}
