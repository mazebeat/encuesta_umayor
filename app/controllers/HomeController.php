<?php

/**
 * Class HomeController
 */
class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/
	/**
	 * @return \Illuminate\View\View
	 */
	public function index()
	{
		return View::make('index');
	}

	/**
	 * @return $this|\Illuminate\Http\RedirectResponse
	 */
	public function login()
	{
		$rules = array(
			'rut' => 'required|rut'
		);

		$validator = Validator::make(Input::all(), $rules);

		if($validator->fails()) {
			$messages = $validator->messages();
			return Redirect::back()->withErrors($messages);
		}

		$cliente = new Cliente();
		$pass = true;
		if($pass) {
			$msg = array(
				'data' => array(
					'type' => 'warning', 'title' => 'Nombre Alumno', 'text' => 'En el actual periodo, ya registramos tus respuestas con fecha <strong>dd-mm-aa</strong> a las <strong>hh:mm</strong>, ¿deseas actualizar esta información?',
				), 'options' => array(
					HTML::link("/", "NO", array("class" => "col-md-3 btn btn-default btn-lg text-uppercase")), HTML::link("encuesta", "SI", array("class" => "col-md-3 btn btn-hot btn-lg text-uppercase pull-right"))
				)
			);

			return View::make('messages')->with('msg', $msg);
		} else {
			return Redirect::action('EncuestasController@index');
		}
	}

	/**
	 * @return \Illuminate\View\View
	 */
	public function logout()
	{
		Session::flush();

		return Redirect::to('/');
	}
}
