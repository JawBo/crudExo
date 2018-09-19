<?php

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

Route::get('/', 'ExosController@index');
Route::get('/create', 'ExosController@create');
Route::post('/delete/{id}', 'ExosController@destroy');
Route::post('/update/{id}', 'ExosController@update');
Route::get('/edit/{id}', 'ExosController@edit');