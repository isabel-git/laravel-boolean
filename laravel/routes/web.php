<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/helloAll', function () {
    return view('helloAll');
});

Route::get('/helloYou', function () {
    return view('helloYou', [
        'name' => 'Nerone'
    ]);
});

Route::get('/helloYou2', function () {
    return view('helloYou', [
        'name' => 'Ottaviano'
    ]);
});

Route::get('/holaTodo', 'MainController@salutoTutti');
Route::get('/holaTu', 'MainController@salutoNome');
Route::get('/holaTu2', 'MainController@salutoNome2');