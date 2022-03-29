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

    //return 'Minha primeira rota';

    //return '<h1> HOME </h1>';

});

Route::get('/contato', function(){
    return view('contato');
});

Route::get('/quemsomos', function(){
    return view('quemsomos');
});