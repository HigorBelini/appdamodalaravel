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
    return view('site');
});

Auth::routes();

Route::get('/administrador', 'AdministradorController@index')->name('administrador');


Route::middleware('auth')->prefix('administrador')->namespace('Administrador')->group(function(){

	Route::resource('empresas', 'CompaniesController');
	Route::resource('promocoes', 'PromotionsController');
	Route::resource('usuarios', 'UsuariosController');
	//Route::get('/usuarios', 'UsuariosController@mostrar');
	Route::resource('administradores', 'AdminController');
	Route::resource('editar', 'EditarController');
});

Route::middleware('auth')->prefix('administrador')->group(function(){

	Route::resource('usuarios-promocoes', 'UsersPromotionsController');
	Route::get('relatorios', function () {
    return view('administrador.relatorios.index');
});
});