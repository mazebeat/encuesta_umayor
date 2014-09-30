<?php

/**
 * Class HomeController
 */
class HomeController extends BaseController
{

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
	public function index($canal = null)
	{
		if(isset($canal) && Session::has('canal')) {
			Session::forget('canal');
			$c = Canal::select('id_canal')->whereCodigo($canal)->remember(5)->first('id_canal');
			if(!empty($c) && $c != null) {
				Session::put('canal', $c->id_canal);
			}
		}

		return View::make('index');
	}

	/**
	 * @return $this|\Illuminate\Http\RedirectResponse
	 */
	public function login()
	{
		//		VALIDA QUE EL RUT QUE SE INGRESÓ ES CORRECTO
		$rules = array(
			'rut' => 'required|rut|exist_rut'
		);

		$validator = Validator::make(Input::all(), $rules);

		if($validator->fails()) {
			$messages = $validator->messages();

			return Redirect::back()->withErrors($messages);
		}

		//		VERIFICA SI EL USUARIO RESPONDIO LA ENCUESTA
		$alumno  = BddUmayor::select(array(
			'id_alumno',
			'nombres',
			'apellido_paterno',
			'apellido_materno'
		))->whereRut(Input::get('rut'))->remember(5)->first(array(
			'id_alumno',
			'nombres',
			'apellido_paterno',
			'apellido_materno'
		));

		$cliente = Cliente::select('id_cliente')->whereIdAlumno($alumno->id_alumno)->remember(5)->first('id_cliente');

		//		SE CREAN LAS VARIABLES DE SESSION DEL ALUMNO
		Session::put('user_id', $cliente->id_cliente);
		Session::put('user_name', $alumno->nombres . ' ' . $alumno->apellido_paterno);
		unset($cliente);
		unset($alumno);

		//		SE VALIDAN RESPUESTAS ANTERIORES
		$resp = Respuesta::select(array('created_at'))->whereIdCliente(Session::get('user_id'))->orderBy('id_respuesta', 'DESC')->remember(5)->first();

		$ya_respondio = false;
		if(!empty($resp) && count($resp)) {
			$ya_respondio   = true;
			$last_responsed = $resp->created_at;
			unset($resp);
		}

		//		SI EL ALUMNO YA RESPONDIO LA ENCUESTA
		if($ya_respondio) {
			$msg = array(
				'data'    => array(
					'type'  => 'warning',
					'title' => Session::get('user_name'),
					'text'  => 'En el actual periodo, ya registramos tus respuestas con fecha <b>' . $last_responsed->toDateString() . '</b> a las <b>' . $last_responsed->toTimeString() . '</b>, ¿deseas actualizar esta información?',
				),
				'options' => array(
					HTML::link("/", "NO", array("class" => "col-md-3 btn btn-default btn-lg text-uppercase")),
					link_to_route("encuestas.index", "SI", array(), array("class" => "col-md-3 btn btn-hot btn-lg text-uppercase pull-right"))
				)
			);
			unset($ya_respondio);

			return View::make('messages')->with('msg', $msg);
		} else {
			//			SI AÚN NO LA RESPONDE
			return Redirect::route('encuestas.index');
		}
	}

	/**
	 * @return \Illuminate\View\View
	 */
	public function logout()
	{
		Session::flush();

		return Redirect::route('home.index');
	}
}
