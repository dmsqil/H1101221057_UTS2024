<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PresensiController;
use App\Http\Controllers\GajiController;
use App\Http\Controllers\JabatanController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/home', [HomeController::class, 'index']);
Route::get('/gaji', [GajiController::class, 'index']);
Route::get('/jabatan', [JabatanController::class, 'index']);
Route::get('/presensi', [PresensiController::class, 'index']);
