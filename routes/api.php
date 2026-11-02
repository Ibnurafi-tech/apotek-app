<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\StafApotekController;
use App\Http\Controllers\ObatController;

Route::get('/pelanggan', [PelangganController::class, 'index']);
Route::post('/pelanggan', [PelangganController::class, 'store']);

Route::get('/staf', [StafApotekController::class, 'index']);
Route::post('/staf', [StafApotekController::class, 'store']);

Route::get('/obat', [ObatController::class, 'index']);
Route::post('/obat', [ObatController::class, 'store']);
