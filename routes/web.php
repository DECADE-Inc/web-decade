<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('beranda', ['title' => "Beranda"]);
});
Route::get('/layanan', function () {
    return view('layanan', ['title' => "Layanan"]);
});
