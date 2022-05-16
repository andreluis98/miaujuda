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

Route::get('/welcome.blade.php', function () {
    return view('welcome');

    //return 'Minha primeira rota';

    //return '<h1> HOME </h1>';

});


Route::get('/doe.blade.php', function(){
    return view('doe');
});


Route::get('/login.blade.php', function(){
    return view('login');
});

Route::get('/cadastro.blade.php', function(){
    return view('cadastro');
});

Route::get('/adote.blade.php', function(){
    return view('adote');
});

Route::get('/pets', 'App\Http\Controllers\PetsController@index');

Route::get('pets-view', 'App\Http\Controllers\PetsController@exibirPets');

Route::get('/pets-view/{id}', 'App\Http\Controllers\PetsController@destroy');