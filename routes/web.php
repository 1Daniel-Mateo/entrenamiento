<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // return view('welcome');
    return 'bienvenido';
});

Route::get('curso', function () {
    return 'bienvenido en especifico';
});

Route::get('cursos/{curso}', function ($curso) {
    return "binevenido al curso $curso";
});
