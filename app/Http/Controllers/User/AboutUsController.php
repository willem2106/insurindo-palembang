<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Misi;
use App\Models\Organisasi;
use App\Models\Sejarah;
use App\Models\Visi;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function showSejarah(){
        $sejarah = Sejarah::whereNull('deleted_at')->get();

        $data = [
            'sejarah' => $sejarah,
        ];
        return view('user.about-us.sejarah', $data);
    }

    public function showVisiMisi(){
        $visi = Visi::whereNull('deleted_at')->get();
        $misi = Misi::whereNull('deleted_at')->get();

        $data = [
            'visi' => $visi,
            'misi' => $misi,
        ];
        return view('user.about-us.visiMisi', $data);
    }

    public function showStruktur(){
        $organisasi = Organisasi::whereNull('deleted_at')->get();

        $data = [
            'organisasi' => $organisasi,
        ];
        return view('user.about-us.struktur', $data);
    }
    public function en_showSejarah(){
        $sejarah = Sejarah::whereNull('deleted_at')->get();

        $data = [
            'sejarah' => $sejarah,
        ];
        return view('user.en.about-us.sejarah', $data);
    }
    public function en_showVisiMisi(){
        $visi = Visi::whereNull('deleted_at')->get();
        $misi = Misi::whereNull('deleted_at')->get();

        $data = [
            'visi' => $visi,
            'misi' => $misi,
        ];
        return view('user.en.about-us.visiMisi', $data);
    }

    public function en_showStruktur(){
        $organisasi = Organisasi::whereNull('deleted_at')->get();

        $data = [
            'organisasi' => $organisasi,
        ];
        return view('user.en.about-us.struktur', $data);
    }
}
