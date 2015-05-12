<?php
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::pattern('canal', '[a-z]{2}');
Route::get('/{canal?}', 'HomeController@index');
Route::post('/', 'HomeController@login');
Route::get('logout', 'HomeController@logout');
Route::get('politicas', 'PoliticasController@index');
Route::get('addexception', 'ExcepcionesController@add');
Route::get('encuestas', 'EncuestasController@index');
Route::post('encuestas', 'EncuestasController@store');
Route::get('test', function () {
	var_dump('TESTER');
});