<?php

use App\Http\Controllers\KontakController;
use App\Http\Controllers\PortofolioController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('beranda', ['title' => "Beranda"]);
});
Route::get('/kontak', [KontakController::class, 'showForm']);
Route::post('/kontak', [KontakController::class, 'submitForm']);
Route::get('/layanan', function () {
    return view('layanan', ['title' => "Layanan"]);
});
Route::get('/portofolio', [PortofolioController::class, 'viewPortolioList']);
