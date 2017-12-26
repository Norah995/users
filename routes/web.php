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
    return view('index');
});
//solo va al index
Route::get('/registro', 'UserController@registro');
//metodo listar
Route::get('/lista', 'UserController@lista');
//metodo eliminar
Route::get('/borra/{id}', 'UserController@elimina');

//Route::get('/all',['as'=>'all', 'uses'=>'QueryController']);
//meodo registrar
Route::post('registrar', ['as'=>'registrar', 'uses'=>'UserController@re']);
//actualizar
Route::get('/edita/{id}', 'UserController@edita');
Route::post('/modificar/{id}', 'UserController@modifica');


Route::resource('/usuario','UsuarioController');
//aumentado
Route::get('registrar', ['as'=>'registrar', 'uses'=>'UserController@index']);
