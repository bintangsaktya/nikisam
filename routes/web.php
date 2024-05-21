<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\JemputanController;
use App\Http\Controllers\Jenis_SampahController;
use App\Http\Controllers\nasabahController;
use App\Http\Controllers\penjemputController;
use App\Http\Controllers\Riwayat_Aksi_TabunganController;
use App\Http\Controllers\TabunganController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('nasabah.landing_page');
});

Route::get('/auth/', function () {
    return view('auth_page');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/jenis', [Jenis_SampahController::class, 'getAllView']);



// ========== Nasabah ==========

Route::get('/nasabah', function () {
    return view('nasabah.main_page');
});

// Nasabah : Navbar

Route::get('/nasabah/profile/{id}', [nasabahController::class, 'profil']);

// Nasabah : Jemput
Route::get('/nasabah/jemput', function () {
    return view('nasabah.alamat');
});

Route::get('/nasabah/jemput/jadwal', function () {
    return view('nasabah.pilih_jadwal');
});

Route::get('/nasabah/jemput/finalisasi', function () {
    return view('nasabah.minta_jemput');
});

// Nasabah : Track

Route::get('/nasabah/track/{id}', [JemputanController::class, 'getAllView']);

// Nasabah : Riwayat

Route::get('/nasabah/riwayat/{id}', [Riwayat_Aksi_TabunganController::class, 'getAllView']);

// =============================

// ========== Admin ==========

Route::get('/admin', function () {
    return view('admin.admin_dashboard');
});

Route::get('/admin/profile/{id}', [adminController::class, 'profil']);

Route::get('/admin/permintaan', [JemputanController::class, 'getAllViewAdmin']);

Route::get('/admin/setoran/{id}', [TabunganController::class, 'getOneAdminSetoran']);

Route::get('/admin/setoran', function () {
    return view('admin.manajemen_setoran');
});

Route::get('/admin/tarikan/{id}', [TabunganController::class, 'getOneAdminTarikan']);

Route::get('/admin/tarikan', function () {
    return view('admin.manajemen_tarikan');

});


// ===========================

// ========== Penjemput ==========

Route::get('/penjemput', [JemputanController::class, 'getAllViewPenjemput']);

Route::get('/penjemput/profile/{id}', [penjemputController::class, 'profil']);

// ===============================



