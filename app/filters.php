<?php

/*
|--------------------------------------------------------------------------
| Application & Route Filters
|--------------------------------------------------------------------------
|
| Below you will find the "before" and "after" events for the application
| which may be used to do any work before or after a request into your
| application. Here you may also register your custom route filters.
|
*/

App::before(function ($request) {
	//
});


App::after(function ($request, $response) {
	//
});

/*
|--------------------------------------------------------------------------
| Authentication Filters
|--------------------------------------------------------------------------
|
| The following filters are used to verify that the user of the current
| session is logged into this application. The "basic" filter easily
| integrates HTTP Basic authentication for quick, simple checking.
|
*/

Route::filter('auth', function () {
	if(Auth::guest()) {
		if(Request::ajax()) {
			return Response::make('Unauthorized', 401);
		} else {
			return Redirect::guest('login');
		}
	}
});


Route::filter('auth.basic', function () {
	return Auth::basic();
});

Route::filter('auth.login', function () {
	// if(!(Session::has('user_id') && Session::get('user_id') != null)) {
	// 	Session::flush();
	// 	$msg = array(
	// 		'data'    => array(
	// 			'type'  => 'danger',
	// 			'title' => 'Atención',
	// 			'text'  => 'Usuario no logueado'
	// 		),
	// 		'options' => array(
	// 			'left' => HTML::link(URL::previous(), 'Volver', array('class' => 'col-md-3 btn btn-default btn-lg pull-right text-uppercase'))
	// 		)
	// 	);

	// 	return View::make('messages', compact('msg'));
	// }
});

/*
|--------------------------------------------------------------------------
| Guest Filter
|--------------------------------------------------------------------------
|
| The "guest" filter is the counterpart of the authentication filters as
| it simply checks that the current user is not logged in. A redirect
| response will be issued if they are, which you may freely change.
|
*/

Route::filter('guest', function () {
	if(Auth::check())
		return Redirect::to('/');
});

/*
|--------------------------------------------------------------------------
| CSRF Protection Filter
|--------------------------------------------------------------------------
|
| The CSRF filter is responsible for protecting your application against
| cross-site request forgery attacks. If this special token in a user
| session does not match the one given in this request, we'll bail.
|
*/

Route::filter('csrf', function ($route, $request) {
	if(strtoupper($request->getMethod()) === 'GET') {
		return;
	}

	$token = $request->header('X-CSRF-Token') ?: Input::get('_token');

	if(Session::token() != $token) {
		return Redirect::route('home.index');
		throw new Illuminate\Session\TokenMismatchException;
	}
});
