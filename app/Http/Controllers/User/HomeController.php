<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Home;

class HomeController extends Controller
{
    //
    public function index()
    {
        $sliders = Home::all();
        return view('user/home', compact('sliders'));
    }

    public function en_index()
    {
        $sliders = Home::all();
        return view('user.en.home', compact('sliders'));
    }
}
