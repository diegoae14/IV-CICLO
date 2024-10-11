<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('bienvenida', function () {
    return "pepe se la come";
});

Route::get('login', function () {
    return view('login');
});
