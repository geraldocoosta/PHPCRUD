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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/','EmpregadoController@index');

Route::get('/empregado','EmpregadoController@index');



Route::get('/empregado/cadastrar','EmpregadoController@criar');

Route::post('/empregado/create','EmpregadoController@create');

	




