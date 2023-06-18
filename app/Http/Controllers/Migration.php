<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class Migration extends Controller
{
    public function artisan()
    {
        Artisan::call('migrate:fresh --seed');
    }
}
