<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PelangganController;

Route::get('/', function () {
    return view('welcome');
});

// Route untuk Dashboard (jika ada)
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// Route CRUD Pelanggan
Route::resource('pelanggan', PelangganController::class);