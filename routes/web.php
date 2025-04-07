<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard-page');
});

Route::get('/memeriksa', function () {
    return view('periksa-page');
});

Route::get('/obat', function () {
    return view('obat-page');
});

Route::get('/dokter', function () {
    return view('list-dokter');
});
