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

Route::get('produtos', 'App\Http\Controllers\MeuControlador@produtos');

/*
Route::get('/ola/sejabemvindo', function () {
    echo "Olá, Seja Bem Vindo!";
});

Route::get('/ola2/{nome}', function ($nomeRecebido) {
    echo "Olá, Seja Bem Vindo!".$nomeRecebido;
})->where('nome','[A-Za-z]+');
*/