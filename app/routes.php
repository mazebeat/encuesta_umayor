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

Route::get('/', 'HomeController@index');
Route::post('/', 'HomeController@login');
Route::get('logout', 'HomeController@logout');

Route::resource('survey', 'EncuestaController');

Route::get('politicas', function(){
  return View::make('politicas');
});
Route::get('test', function(){
	dd(URL::getGenerator());
});