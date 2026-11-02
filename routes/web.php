<?php

use Illuminate\Support\Facades\Route;

// URL Halaman Input Data (http://127.0.0.1:8000/)
Route::get('/', function () {
    return view('index');
});

// URL Halaman Tabel Data Terdaftar (http://127.0.0.1:8000/data)
Route::get('/data', function () {
    return view('data');
});
