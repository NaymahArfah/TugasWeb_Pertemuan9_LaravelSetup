<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $nama = 'Naymah';
    $matakuliah = ['HTML', 'CSS', 'Laravel'];

    return view('home', [
        'nama' => $nama,
        'matakuliah' => $matakuliah
    ]);
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});