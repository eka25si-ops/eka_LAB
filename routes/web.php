<?php

use App\Http\Controllers\DasboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\QuestionController;
use Carbon\Carbon;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', [
        'name' => 'eka',
        'datetime' => Carbon::now()->format('Y-m-d H:i:s')
    ]);
});

Route::get('/pcr', function () {
    return 'Selamat Datang di Website Kampus PCR!';
});

Route::get('/nama/{param1}', function ($param1) {
    return 'Nama saya: ' . $param1;
});

Route::get('/nim/{param1?}', function ($param1 = '') {
    return 'NIM saya: ' . $param1;
});

Route::get('/mahasiswa/{param1}', [MahasiswaController::class, 'show']);

route::get('/about', function (){
    return view('halaman-about');
});

Route::get('/home', [HomeController::class, 'index']);

Route::post('question/store', [QuestionController::class, 'store'])
		->name('question.store');

Route::post('/dashboard', [DasboardController::class, 'store'])
		->name('dasboard.index');

Route::resource('pelanggan', PelangganController::class);
