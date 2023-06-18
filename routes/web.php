<?php

use App\Http\Controllers\CustomHome;
use App\Http\Controllers\Karir;
use App\Http\Controllers\Layanan;
use App\Http\Controllers\TentangKami;
use App\Http\Controllers\Unit;
use App\Http\Controllers\Migration;
use App\Http\Controllers\User\AboutUsController;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\User\KontakController;
use App\Http\Controllers\User\LayananController;
use App\Http\Controllers\User\LowonganController;
use App\Http\Controllers\User\UnitController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();
// Auth::routes(['register' => false]);

Route::get('/artisan', [Migration::class, 'artisan']);

// User
// Home
Route::get('/', [HomeController::class, 'index'])->name('home');



// Tentang Kami
Route::get('/about-us/sejarah', [AboutUsController::class, 'showSejarah']);
Route::get('/about-us/visi-misi', [AboutUsController::class, 'showVisiMisi']);
Route::get('/about-us/struktur', [AboutUsController::class, 'showStruktur']);


// Unit
Route::get('/unit/kantor-pusat', [UnitController::class, 'showKantorPusat']); //b=yang mau dibuka dan //a= penanda
Route::get('/unit/kantor-cabang', [UnitController::class, 'showKantorCabang']);
Route::get('/unit/lab', [UnitController::class, 'showLab']);
Route::get('/unit/kalibrasi', [UnitController::class, 'showKalibrasi']);


// Layanan Kami
Route::get('/layanan-kami', [LayananController::class, 'showlayananKami']);
Route::get('/layanan-kami/{id_main}', [LayananController::class, 'showlayananDetail']);
Route::get('/search',  [LayananController::class, 'search'])->name('search');


// Lowongan
Route::get('/lowongan', [LowonganController::class, 'showLowongann'])->name('lowongan');
Route::get('/lowongan/{id_main}', [LowonganController::class, 'showDetail']);


// Kontak
Route::get('/kontak', [KontakController::class, 'showKontak']);



// Login
Route::group(['middleware' => 'auth'], function() {

    // Admin-Only
    Route::middleware('admin')->group(function() {
        // Home
        Route::get('/home', [CustomHome::class, 'index'])->name('home');
        Route::post('/add-home',[CustomHome::class, 'postAdd'])->name('add home');
        Route::post('/edit-home',[CustomHome::class, 'postEdit'])->name('edit home');
        Route::post('/delete-home',[CustomHome::class, 'postDelete'])->name('delete home');


        // Tentang Kami
        Route::get('/tentang-kami',[TentangKami::class , 'index'])->name('tentang kami');
        Route::post('/add-tentang-kami',[TentangKami::class, 'postAdd'])->name('add tentang');
        Route::post('/edit-tentang-kami',[TentangKami::class, 'postEdit'])->name('edit tentang');
        Route::post('/delete-tentang-kami',[TentangKami::class, 'postDelete'])->name('delete tentang');


        // Unit
        Route::get('/unit',[Unit::class , 'index'])->name('unit');
        Route::post('/add-unit',[Unit::class , 'postAdd'])->name('add unit');
        Route::post('/edit-unit',[Unit::class, 'postEdit'])->name('edit unit');
        Route::post('/delete-unit',[Unit::class, 'postDelete'])->name('delete unit');


        // Layanan
        Route::get('/layanan',[Layanan::class , 'index'])->name('layanan kami');
        Route::post('/add-layanan',[Layanan::class , 'postAdd'])->name('add layanan');
        Route::post('/edit-layanan',[Layanan::class , 'postEdit'])->name('edit layanan');
        Route::post('/delete-layanan',[Layanan::class , 'postDelete'])->name('delete layanan');

        Route::get('/layanan/{id_main}',[Layanan::class , 'detail'])->name('detail layanan');
        Route::post('/add-layanan-detail',[Layanan::class , 'postAddDetail'])->name('add layanan detail');
        Route::post('/edit-layanan-detail',[Layanan::class , 'postEditDetail'])->name('edit layanan detail');
        Route::post('/delete-layanan-detail',[Layanan::class , 'postDeleteDetail'])->name('delete layanan detail');


        // Karir
        Route::get('/karir',[Karir::class , 'index'])->name('lowongan');
        Route::post('/add-karir',[Karir::class , 'postAdd'])->name('add karir');
        Route::post('/edit-karir',[Karir::class , 'postEdit'])->name('edit karir');
        Route::post('/delete-karir',[Karir::class , 'postDelete'])->name('delete karir');

        Route::get('/karir/{id_main}',[Karir::class , 'detail'])->name('detail lowongan');
        Route::post('/add-karir-detail',[Karir::class , 'postAddDetail'])->name('add karir detail');
        Route::post('/edit-karir-detail',[Karir::class , 'postEditDetail'])->name('edit karir detail');
        Route::post('/delete-karir-detail',[Karir::class , 'postDeleteDetail'])->name('delete karir detail');
    });
});

//Home
Route::get('/en', [HomeController::class, 'en_index'])->name('en_home');
//aboutus
Route::get('en/about-us/sejarah', [AboutUsController::class, 'en_showSejarah'])->name('en_about-us_sejarah');
Route::get('en/about-us/visi-misi', [AboutUsController::class, 'en_showVisiMisi'])->name('en_about-us_visi-misi');
Route::get('en/about-us/struktur', [AboutUsController::class, 'en_showStruktur'])->name('en_about-us_struktur');

//unit
Route::get('en/unit/kantor-pusat', [UnitController::class, 'en_showKantorPusat'])->name('en_unit_kantor-pusat');
Route::get('en/unit/kantor-cabang', [UnitController::class, 'en_showKantorCabang'])->name('en_unit_kantor-cabang');
Route::get('en/unit/lab', [UnitController::class, 'en_showLab'])->name('en_unit_lab');
Route::get('en/unit/kalibrasi', [UnitController::class, 'en_showKalibrasi'])->name('en_unit_kalibrasi');




