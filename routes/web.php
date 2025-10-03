<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\proyek;

Route::get('/', function () {
    $tittle = "WebSaya.Com";
    $slug = "home";
    $konten = "Ini adalah konten WebSaya.Com";
    return view('konten.home', compact('tittle','slug','konten'));
});

Route::get('/home', function(){
    $tittle = "WebSaya.Com";
    $slug = "home";
    $konten = "Ini adalah konten WebSaya.Com";
    return view('konten.home', compact('tittle','slug','konten'));
});

Route::get('/', function () {
    return view('welcome');
});
