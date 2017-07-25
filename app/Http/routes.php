<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


// AUTH
Route::auth();

// HOME
Route::get('/home', 'HomeController@index');
Route::get('/', 'HomeController@index');

// TRABAJO
Route::get('trabajo/{id}', 'TrabajoController@show')->name('show-trabajo');
Route::resource('trabajo', 'TrabajoController');

// EMPRESA
Route::resource('empresa', 'EmpresaController');

// DOCUMENTO
Route::get('documento/{id}/{tipo_padre}/create', 'DocumentoController@create');
Route::post('documento/{id}/{tipo_padre}/store', 'DocumentoController@store');
Route::get('documento/{id_padre}/{id_documento}/edit', 'DocumentoController@edit');
Route::get('documento/{id_padre}/{id_documento}/{tipo_padre}/download', 'DocumentoController@download');
Route::get('documento/{id}', 'DocumentoController@show');
Route::delete('documento/{id}/{tipo_padre}', 'DocumentoController@destroy');
Route::resource('documento', 'DocumentoController');

// PERSONAL
Route::get('personal/{id}', 'PersonalController@show')->name('show-personal');
Route::get('personal/{id_padre}/{id_documento}/{tipo_padre}/download', 'DocumentoController@download');
Route::resource('personal', 'PersonalController');
