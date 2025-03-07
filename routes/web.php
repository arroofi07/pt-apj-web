<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LayananController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/ai', function () {
    return view('AI.ai');
})->name('ai');

Route::get('/fasilitas', function () {
    return view('fasilitas.fasilitas');
})->name('fasilitas.fasilitas');

Route::get('/navbar', function () {
    return view('layouts.navbar');
});



Route::get('/layanan', [LayananController::class, 'index'])->name('layanan.layanan');
Route::get('/layanan/search', [LayananController::class, 'search'])->name('layanan.search');
Route::get('/layanan/kategori/{category}', [LayananController::class, 'filter'])->name('layanan.filter');
