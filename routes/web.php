<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/mahasiswa/{nrp}', function ($nrp) {
    return view('mahasiswa', compact('nrp'));
})->name('mahasiswa');

Route::get('/agent/{tema?}', function ($tema = null) {
    return view('agent', compact('tema'));
})->name('agent');