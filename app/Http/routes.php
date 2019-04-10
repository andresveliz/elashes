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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('categorias','CategoriasController');
Route::resource('clientes','ClientesController');
Route::resource('diarios_producto','Diarios_productosController');
Route::resource('diarios','DiariosController');
Route::resource('productos','ProductosController');
Route::resource('reservas','ReservasController');
Route::resource('servicios','ServiciosController');
Route::resource('trabajadores','TrabajadoresController');
Route::resource('trabajos','TrabajosController');
Route::resource('ventas','VentasController');

Route::get('reservas/confirmar/{id}',
	['as' 	=> 'reservas.confirmar',
		'uses' => 'ReservasController@confirmar']);

Route::get('reportes/ticket/{id}',
	['as' 	=>'reportes.ticket',
		'uses' => 'ReportesController@ticket']);

Route::get('reportes/operador',
	['as' 	=>'reportes.operador',
		'uses' => 'ReportesController@operador']);

Route::get('productos/vendido/{id}',
	['as'	=>'productos.vendido',
		'uses' => 'ProductosController@vendido']);

Route::get('reportes/diario',
	['as' 	=>'reportes.diario',
		'uses' => 'ReportesController@diario']);

Route::get('reservas/{id}/destroy',[
    'uses' => 'ReservasController@destroy',
    'as' => 'reservas.destroy']);