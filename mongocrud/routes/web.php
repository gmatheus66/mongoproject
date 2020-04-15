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

Route::get('/', 'ProdutoController@index')->name('index');

Route::get('/create', 'ProdutoController@create');

Route::post('/create', 'ProdutoController@register')->name('create');

Route::get('/{id}', 'ProdutoController@get_produto');

Route::post('/update', 'ProdutoController@update');

Route::get('/delete/{id}', 'ProdutoController@delete');