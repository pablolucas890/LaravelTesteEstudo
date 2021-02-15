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

Route::get('/ola/sejabemvindo', function () {
    echo "Olá, Seja Bem Vindo!";
});

Route::get('/ola2/{nome}', function ($nomeRecebido) {
    echo "Olá, Seja Bem Vindo!".$nomeRecebido;
})->where('nome','[A-Za-z]+');

Route::get('produtos', 'App\Http\Controllers\MeuControlador@produtos');

Route::get('nome', 'App\Http\Controllers\MeuControlador@getNome');

Route::get('idade', 'App\Http\Controllers\MeuControlador@getIdade');

Route::get('multiplicar/{n1}/{n2}', 'App\Http\Controllers\MeuControlador@multiplicar');

Route::resource('clientes','App\Http\Controllers\ClienteControlador'); //Associa cada função do controlador à uma rota
