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

	Route::get('', 'HomeController@index');
	Route::post('', 'HomeController@login');
	Route::get('logout', 'HomeController@logout');
	Route::get('politicas', function () {
		return View::make('politicas');
	});

	Route::resource('bdd_umayors', 'BddUmayorsController');
	Route::resource('negocios', 'NegociosController');
	Route::resource('encuestas', 'EncuestasController');
	Route::resource('pregunta', 'NegociosController');
	Route::resource('respuestas', 'RespuestasController');
	Route::resource('canales', 'CanalesController');

	Route::get('test', function () {
		$a = Cliente::find(1)->bddumayor;
		Tools::printr($a);
	});

	Route::get('/{encoded_url}', function ($encoded_url) {
		//		$hash_email          = 'eyJpdiI6IitiTStvb3VmWGU2UThORjhkdmtEXC9BPT0iLCJ2YWx1ZSI6IkUwY0dITVN1TWo5TUlYV0NCeUxwNGc9PSIsIm1hYyI6Ijc4MThhMGNiMjQ0NWI5ZDVjOWE0OWYzNTlkYjg0ZDlmMWZjYjJhNTU1MWJmZTFkNjMyNGUxNGViNWFmMjM4ZDcifQ==';
		//		$hash_facebook       = 'eyJpdiI6IlF5QnVQYVFTXC8rRDJ2eGpTaVBZck5RPT0iLCJ2YWx1ZSI6ImtWelpMSktkeXJZSVQyY2U5RkI4MGc9PSIsIm1hYyI6Ijc1MzhmMmZkNTRkOWYyOTA3OWRkYmUxYTc0YTA5ZGQ1YTY4ZDdjNDMyNzFlMjg4ZTdhYmExMjljNjZmOTk0ZjkifQ';
		//		$hash_bannerportal   = 'eyJpdiI6InhRNkRycWcrVnJFK09HRDkwQ0VlV1E9PSIsInZhbHVlIjoiNWE2RTh6RmRUQ1kwWVNFQURPajcxOFwvTGF3S1htK3Rpb2s1cm9LZHh4S3c9IiwibWFjIjoiNzgxZGUzZWI4ZjY0OTFlMTJjMDMwOGRhMjc3OGYyZjYwZDZmOWU1OWNkNmZjZDg0MDk2Yzk0ZTBhMDBlNzcyMSJ9';
		//		$hash_appinfo        = 'eyJpdiI6IndhU0lLa2ZlNHZqU291d2lGNVwvQVNnPT0iLCJ2YWx1ZSI6IjhVWENyazdoMEZ2MUZLRGk5c1doSFE9PSIsIm1hYyI6IjU2YjI1NzljN2Y2MmY3ZTJlMDExYTIwZWQ1YTc4YTYyOTA5ZmY3NTk2NWVhNzg4N2RmNmU1ZmU0ZWIzODUyNDkifQ';
		//		$hash_callcenter     = 'eyJpdiI6IlBwU0NRamg1dUljczdnQTlEakdzVkE9PSIsInZhbHVlIjoiQ0xtNW1ZMFQya1NKQmd4aElSVWtjUUdPanFHcDZ3Mkt2MDNhVk1vVDFvVT0iLCJtYWMiOiJmYjBjMjNjMTE4YWE4NjgwM2FmMGNmYTM3OGRlYTIzNGEyYzk3NTI5YTgwNmNhM2I3YTYzYjFkNTQ0Mzg3NGRkIn0';
		//		$hash_centroantecion = 'eyJpdiI6IlQ3MnptUit2MHNFazhLRHZzWmt1K3c9PSIsInZhbHVlIjoibk1TN0s2ZEpkNEtwdHp6d1wvXC9GeHlJQlwveCtDbzh4Mm1raDRleWxJR2M5QT0iLCJtYWMiOiJjOTIwNzgzMDhjM2ZiOGM1ZWEzY2FjNzg1OWMxODE3YTViMThjNzRlYzBhZGQyMjBkOTZmMDYxOWMwODIzN2JmIn0';
		switch(Str::lower(Crypt::decrypt($encoded_url))) {
			case 'email':
				$canal = Str::upper('Emails');
				break;
			case 'facebook':
				$canal = Str::upper('Facebook');
				break;
			case 'bannerportal':
				$canal = Str::upper('Banner portal estudiantil');
				break;
			case 'appinfo':
				$canal = Str::upper('APP InfoUMayor');
				break;
			case 'callcenter':
				$canal = Str::upper('Call center');
				break;
			case 'centroantecion':
				$canal = Str::upper('Centros de atención presencial');
				break;
		}

		return 'Canal: ' . $canal;
		Session::put('ses');
	})->where('$encoded_url', '.*');

	/*	LINKS PARA CANALES
	http://umayor.experienciaclientes.cl/em -> Emails
	http://umayor.experienciaclientes.cl/fa -> Facebook
	http://umayor.experienciaclientes.cl/ba -> Banner portal estudiantil
	http://umayor.experienciaclientes.cl/ap -> APP InfoUMayor
	http://umayor.experienciaclientes.cl/ca -> Call center
	http://umayor.experienciaclientes.cl/ce -> Centros de atención presencial
	*/