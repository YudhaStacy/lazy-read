<?php

use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\BerandaController;

use Illuminate\Support\Facades\Route;

Route::get('/about', function () {
    return view('tentangKami');
});

Route::get('/', [BerandaController::class, 'index'])->name('home.index');

Route::get('/articles', [ArtikelController::class, 'index'])->name('artikel.index');
Route::get('/articles/{slug}', [ArtikelController::class, 'show'])->name('artikel.show');
