<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PresensiController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GajiController;
use App\Http\Controllers\JabatanController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/presensi', [HomeController::class, 'index']);
Route::get('/gaji', [GajiController::class, 'index'])->name('gaji.index');
Route::get('/jabatan', [JabatanController::class, 'index']);
Route::get('/presensi', [PresensiController::class, 'index']);
