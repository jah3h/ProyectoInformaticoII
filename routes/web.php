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


Auth::routes();

/*Route::get('/lista', function () {
    return view('lista');
})->middleware('auth');*/
//Route::get('/home', 'HomeController@index')->name('home');


Route::resource('listaCompra', 'ListaComprasController')->middleware('auth');

Route::resource('productos', 'ProductosController')->middleware('auth');
