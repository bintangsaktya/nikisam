<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\JemputanController;
use App\Http\Controllers\Jenis_SampahController;
use App\Http\Controllers\nasabahController;
use App\Http\Controllers\penjemputController;
use App\Http\Controllers\Riwayat_Aksi_TabunganController;
use App\Http\Controllers\TabunganController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'
], function ($router) {
    Route::post('register', [AuthController::class, 'register']);
    Route::post('login', [AuthController::class, 'login']);
    Route::get('user', [AuthController::class, 'me']);
    Route::get('logout', [AuthController::class, 'logout']);
});

Route::post('admin', [adminController::class, 'insert']);
Route::put('admin/{id}', [adminController::class, 'update']);
Route::get('admin', [adminController::class, 'getAll']);
Route::get('admin/{id}', [adminController::class, 'getOne']);

Route::post('nasabah/register', [nasabahController::class, 'available']);
Route::post('nasabah/insert', [nasabahController::class, 'insert']);
Route::put('nasabah/update/{id}', [nasabahController::class, 'update']);
Route::get('nasabah', [nasabahController::class, 'getAll']);
Route::get('nasabah/{id}', [nasabahController::class, 'getOne']);

Route::post('penjemput', [penjemputController::class, 'insert']);
Route::put('penjemput/{id}', [penjemputController::class, 'update']);
Route::get('penjemput', [penjemputController::class, 'getAll']);
Route::get('penjemput/{id}', [penjemputController::class, 'getOne']);

Route::get('tabungan/{id}', [TabunganController::class, 'getOne']);
Route::get('tabungan/nominal/{id}', [TabunganController::class, 'getNominal']);
Route::get('tabungan/berat/{id}', [TabunganController::class, 'getBerat']);
Route::post('tabungan', [TabunganController::class, 'insert']);
Route::put('tabungan/{id}', [TabunganController::class, 'update']);

Route::post('/riwayat', [Riwayat_Aksi_TabunganController::class, 'insert']);

Route::get('/jenis', [Jenis_SampahController::class, 'getAll']);
Route::get('/jenis/{id}', [Jenis_SampahController::class, 'getOne']);

Route::post('jemput/upload', [JemputanController::class, 'uploadImg']);
Route::get('jemput/jumlah/aktif', [JemputanController::class, 'allJemputanAktif']);
Route::get('jemput/jumlah/berat', [JemputanController::class, 'allJemputanBerat']);
Route::get('jemput/jumlah', [JemputanController::class, 'allJemputan']);
Route::get('jemput/jumlah/{id}', [JemputanController::class, 'Jemputan']);
Route::post('/jemput', [JemputanController::class, 'insert']);
Route::put('/jemput/status/{id}', [JemputanController::class, 'updateStatus']);


