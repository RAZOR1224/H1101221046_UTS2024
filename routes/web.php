<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('layout.main');
});

Route::get('/view_jabatan', [AdminController::class, 'view_jabatan']);
Route::get('/view_gaji', [AdminController::class, 'view_gaji']);
Route::get('/view_presensi', [AdminController::class, 'view_presensi']);
