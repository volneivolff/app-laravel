<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Volnei Volff
|--------------------------------------------------------------------------
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sobre', function(){
    return view('sobre');
});

Route::get('/teste', function(){
    return view('sobre');
});