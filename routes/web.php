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
    return view('principal');
})->middleware('guest');

Route::resource('listaCompra', 'ListaComprasController')->middleware('auth');
Route::resource('listaCompra.productos', 'ProductosController')->shallow()->middleware('auth');

Auth::routes();



