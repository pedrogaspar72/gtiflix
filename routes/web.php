<?php

use App\Models\Ator;
use App\Models\Genero;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/generos', function () {
    $sexo = Genero::all();
    dd($sexo);
});

Route::get('/atores', function () {
    $ator = Ator::all();
    dd($ator);
});