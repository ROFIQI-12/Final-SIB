<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\UploudController;
use App\Http\Controllers\UploudDataController;
use App\Http\Controllers\DataProduksiController;
use App\Http\Controllers\DPembudidayaController;

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
    return view('beranda');
});
Route::get('/konsultasi', function () {
    return view('konsul');
});
Route::get('/login', [LoginController::class, 'index']);

Route::get('/daftar', [DaftarController::class, 'daftar']);

Route::get('/dataProduksi', [DataProduksiController::class, 'dataProduksi']);
Route::get('/dPembudidaya', [DPembudidayaController::class, 'dPembudidaya']);
Route::get('/uploudData', [UploudDataController::class, 'uploudData']);



