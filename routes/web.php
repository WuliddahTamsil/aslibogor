<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landingpage');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/direktori', function () {
    return view('direktori');
});

Route::get('/kumpulantoko', function () {
    return view('kumpulantoko');
});