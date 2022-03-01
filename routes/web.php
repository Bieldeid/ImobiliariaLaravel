<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get ('/apartamentos', function(){
    return view ('apartamentos');
});

Route::get ('/casas', function(){
    return view ('casas');
});

Route::get ('/terrenos', function(){
    return view ('terrenos');
});

Route::get ('/sobrados', function(){
    return view ('sobrados');
});
