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
    return view('index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/clientes', 'App\Http\Controllers\ControladorCliente@indexView');

Route::get('/produtos', 'App\Http\Controllers\ControladorProduto@index');
Route::get('/produtos/novo', 'App\Http\Controllers\ControladorProduto@create');
Route::post('/produtos', 'App\Http\Controllers\ControladorProduto@store');
Route::get('/produtos/apagar/{id}', 'App\Http\Controllers\ControladorProduto@destroy');
Route::get('/produtos/editar/{id}', 'App\Http\Controllers\ControladorProduto@edit');
Route::post('/produtos/{id}', 'App\Http\Controllers\ControladorProduto@update');




