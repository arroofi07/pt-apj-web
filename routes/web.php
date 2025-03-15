<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\ContactController;

// 
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/ai', function () {
    return view('AI.ai');
})->name('ai');

Route::get('/fasilitas', [FasilitasController::class, 'index'])->name('fasilitas.fasilitas');
Route::get('/team', [TeamController::class, 'index'])->name('team.team');

Route::get('/navbar', function () {
    return view('layouts.navbar');
});

Route::get('/about', [AboutController::class, 'index'])->name('about');

Route::get('/layanan', [LayananController::class, 'index'])->name('layanan.layanan');
Route::get('/layanan/search', [LayananController::class, 'search'])->name('layanan.search');
Route::get('/layanan/kategori/{category}', [LayananController::class, 'filter'])->name('layanan.filter');

Route::post('/send-email', [ContactController::class, 'sendEmail'])->name('send-email');
