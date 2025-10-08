<?php

use Illuminate\Support\Facades\Route;

// Home
Route::get('/', function () {
    $tittle = "FotoBooth.Com";
    $konten = "Selamat datang di FotoBooth.Com - platform modern untuk produk dan galeri kami.";
    return view('konten.home', compact('tittle','konten'));
});

Route::get('/home', function () {
    return redirect('/');
});

// Pages
Route::view('/login', 'konten.login');
Route::view('/shop', 'konten.shop');
Route::view('/gallery', 'konten.gallery');
Route::view('/contact', 'konten.contact');

