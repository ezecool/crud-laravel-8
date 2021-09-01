<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    //return view('welcome');
    return view('auth.login');
});

// Rutas de personas
Route::get('/personas', 'App\Http\Controllers\PersonController@index');

Route::get('/personas/{id}', 'PersonController@show')->where('id', '[0-9]+');

Route::get('/personas/nuevo', 'PersonController@create');

//Route::resource('marcas', 'App\Http\Controllers\MarcaController');

Route::resource('articulos', 'App\Http\Controllers\ArticuloController');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
