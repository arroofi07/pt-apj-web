<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/ai', function () {
    return view('AI.ai');
})->name('ai');

Route::get('/navbar', function () {
    return view('layouts.navbar');
});



Route::get('/layanan', function () {
    return view('layanan.layanan');
})->name('layanan.layanan');
