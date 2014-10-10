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

Route::when('*', 'csrf', array(
        'post',
        'put',
        'delete'
    ));
Route::pattern('canal', '[a-z]{2}');
Route::get('/{canal?}', array(
        'as'   => 'home.index',
        'uses' => 'HomeController@index'
    ));
Route::post('/', array(
        'as'   => 'home.login',
        'uses' => 'HomeController@login'
    ));
Route::get('logout', 'HomeController@logout');
Route::get('politicas', array(
        'as'   => '',
        'uses' => 'PoliticasController@index'
    ));
Route::get('add_exception', array(
        'as'   => 'excepciones.add',
        'uses' => 'ExcepcionesController@add'
    ));
Route::resource('encuestas', 'EncuestasController');

Route::get('test', function () {
});

//	LINKS PARA CANALES
//	https://umayor.experienciaclientes.cl/em -> Emails
//	https://umayor.experienciaclientes.cl/fa -> Facebook
//	https://umayor.experienciaclientes.cl/ba -> Banner portal estudiantil
//	https://umayor.experienciaclientes.cl/ap -> APP InfoUMayor
//	https://umayor.experienciaclientes.cl/ca -> Call center
//	https://umayor.experienciaclientes.cl/ce -> Centros de atención presencial