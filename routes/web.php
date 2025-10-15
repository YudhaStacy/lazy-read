<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('beranda');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/artikel', function () {
    return view('artikel');
});
