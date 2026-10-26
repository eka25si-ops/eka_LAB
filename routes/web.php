<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

// Route untuk Dashboard (jika ada)
Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->name('dashboard');

// Route CRUD Pelanggan
Route::resource('pelanggan', PelangganController::class);

Route::resource('user', UserController::class);
