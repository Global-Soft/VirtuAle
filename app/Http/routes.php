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

Route::get('/', 'ListarTrabajos@index');

Route::get('/documento', 'DocumentoController@index');

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/principalDocumento', 'HomeDocumentoController@index');

Route::get('/insertarDocumento', 'InsertDocumentoController@insertFormInicial');

Route::post('/crearDocumento','InsertDocumentoController@insertDocumentoInicial');

Route::get('/vistaDocumentos','ViewDocumentoController@index') ;

Route::get('/seleccionarEditarDocumento','UpdateDocumentoController@index') ;

Route::get('/seleccionarVariableEditar/{codigoDoc}','UpdateDocumentoController@showVariables') ;

Route::get('/editarDescripcion/{codigoDoc}','UpdateDocumentoController@showDescripcion') ;

Route::get('/editarNumSolicitudTrab/{codigoDoc}','UpdateDocumentoController@showNumSolicitudTrab') ;

Route::get('/editarNumCotizacion/{codigoDoc}','UpdateDocumentoController@showNumCotizacion') ;

Route::get('/editarNumAdjudicacion/{codigoDoc}','UpdateDocumentoController@showNumAdjudicacion') ;

Route::get('/editarNumInformeTec/{codigoDoc}','UpdateDocumentoController@showNumInformeTec') ;

Route::get('/editarNumGES/{codigoDoc}','UpdateDocumentoController@showNumGES') ;

Route::get('/editarNumFactura/{codigoDoc}','UpdateDocumentoController@showNumFactura') ;

Route::post('/editarDescripcion/{codigoDoc}','UpdateDocumentoController@editDescripcion') ;

Route::post('/editarNumSolicitudTrab/{codigoDoc}','UpdateDocumentoController@editNumSolititudTrab') ;

Route::post('/editarNumCotizacion/{codigoDoc}','UpdateDocumentoController@editNumCotizacion') ;

Route::post('/editarNumAdjudicacion/{codigoDoc}','UpdateDocumentoController@editNumAdjudicacion') ;

Route::post('/editarNumInformeTec/{codigoDoc}','UpdateDocumentoController@editNumInformeTec') ;

Route::post('/editarNumGES/{codigoDoc}','UpdateDocumentoController@editNumGES') ;

Route::post('/editarNumFactura/{codigoDoc}','UpdateDocumentoController@editNumFactura') ;

Route::get('/subirSolicitudTrabajo','UploadSolicitudTrab@index') ;

Route::post('/subirSolicitudTrabajo','UploadSolicitudTrab@showUploadFile') ;
