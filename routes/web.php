<?php

use App\Models\Ator;
use App\Models\Genero;
use App\Models\FIlme;
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

Route::get('/lista-filmes', function () {
    $filmes = Filme::all();
    return view('lista-filmes',
        compact('filmes'));
});