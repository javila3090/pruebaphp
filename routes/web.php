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

Route::get('/', [
    'as' => '/',
    'uses' => 'HomeController@index'
]);

Route::get('login', [
    'as' => 'login',
    'uses' => 'Auth\LoginController@login'
]);

Route::get('empresa/create', [
    'as' => 'empresa/create',
    'uses' => 'EmpresaController@create'
]);

Route::get('empresa/lista', [
    'as' => 'lista',
    'uses' => 'EmpresaController@lista'
]);

Route::post('store', [
    'as' => 'store',
    'uses' => 'EmpresaController@store'
]);

Route::put('update/{empresa}', [
    'as' => 'update',
    'uses' => 'EmpresaController@update'
]);


Route::get('destroy/{empresa}', [
    'as' => 'destroy',
    'uses' => 'EmpresaController@destroy'
]);


Route::get('empresa/update/{id}', [
    'as' => 'empresa/update/{id}',
    'uses' => 'EmpresaController@edit'
]);

Route::get('servicios', [
    'as' => 'servicios',
    'uses' => 'ServiciosController@index'
]);

Route::get('contacto', [
    'as' => 'contacto',
    'uses' => 'ContactoController@index'
]);

Route::get('registro', [
    'as' => 'registro',
    'uses' => 'UserController@index'
]);