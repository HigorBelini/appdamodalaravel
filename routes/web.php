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

Route::middleware('auth')->get('/', function () {
    return view('site');
});

Auth::routes();

Route::get('/administrador', 'AdministradorController@index')->name('administrador')->middleware('can:eAdmin');


Route::middleware('auth')->prefix('administrador')->namespace('Administrador')->group(function(){

	Route::resource('empresas', 'CompaniesController')->middleware('can:eAdmin');
	Route::resource('promocoes', 'PromotionsController')->middleware('can:eAdmin');
	Route::resource('usuarios', 'UsuariosController')->middleware('can:eAdmin');
	Route::resource('administradores', 'AdminController')->middleware('can:eAdmin');
	Route::resource('editar', 'EditarController')->middleware('can:eAdmin');
});

Route::middleware('auth')->prefix('administrador')->group(function(){

	Route::resource('usuarios-promocoes', 'UsersPromotionsController')->middleware('can:eAdmin');
	Route::resource('favoritos', 'FavoritesController')->middleware('can:eAdmin');
	Route::get('relatorios', function () {
    return view('administrador.relatorios.index');
});
});