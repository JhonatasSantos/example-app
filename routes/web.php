<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/apresentacao', function () {
    return view('apresentacao');
});

Route::get('/apresentacao-disciplina', function () {
    return view('disciplina');
});

Route::get('/hello-world', function () {
    return view('retirarmaldicao');
});