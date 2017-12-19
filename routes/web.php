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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/registro', 'UserController@registro');

Route::get('/lista', 'UserController@lista');

//Route::get('/all',['as'=>'all', 'uses'=>'QueryController']);

Route::post('registrar', ['as'=>'registrar', 'uses'=>'UserController@re']);



Route::resource('/usuario','UsuarioController');