<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::prefix('dashboard')->group(function () {

    Route::get('/mahasiswa/{nrp}', function ($nrp) {
        return view('mahasiswa', compact('nrp'));
    })->where('nrp', '[0-9]{10}')
      ->name('mahasiswa');

    Route::get('/hitung-ipk/{ip1}/{ip2}', function ($ip1, $ip2) {
        $jumlah = $ip1 + $ip2;
        $rataRata = $jumlah / 2;

        return view('ipk', compact(
            'ip1',
            'ip2',
            'jumlah',
            'rataRata'
        ));
    })->name('hitung.ipk');
});

Route::get('/agent/{tema?}', function ($tema = null) {
    return view('agent', compact('tema'));
})->name('agent');

Route::fallback(function () {
    return response()->view('errors.404', [], 404);
});