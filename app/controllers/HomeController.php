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
		Session::forget('canal');
		if(isset($canal)) {
			$c  = new Canal();
			$id = $c->select('id_canal')->whereCodigo($canal)->first('id_canal');
			if(!empty($id) && $id != null) {
				Session::put('canal', $id->id_canal);
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
		$alumno  = new BddUmayor();
		$alumno  = $alumno->select(array(
			'id_alumno',
			'nombres',
			'apellido_paterno',
			'apellido_materno'
		))->whereRut(Input::get('rut'))->first(array(
			'id_alumno',
			'nombres',
			'apellido_paterno',
			'apellido_materno'
		));
		$cliente = new Cliente();
		$cliente = $cliente->select('id_cliente')->whereIdAlumno($alumno->id_alumno)->first('id_cliente');

		//		SE CREAN LAS VARIABLES DE SESSION DEL ALUMNO
		Session::put('user_id', $cliente->id_cliente);
		Session::put('user_name', $alumno->nombres . ' ' . $alumno->apellido_paterno);

		//		SE VALIDAN RESPUESTAS ANTERIORES
		$resp = new Respuesta();
		$resp = $resp->select(array('created_at'))->whereIdCliente(Session::get('user_id'))->orderBy('id_respuesta', 'DESC')->first();

		$ya_respondio = false;
		if(!empty($resp) && count($resp)) {
			$ya_respondio  = true;
			$last_responsed = $resp->created_at;
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

			return View::make('messages')->with('msg', $msg)->with('nombre_alumno', $alumno->nombre . ' ' . $alumno->apellido_paterno);
		} else {
			//			SI AÚN NO LA RESPONDE
			return Redirect::route('encuestas.index')->with('nombre_alumno', $alumno->nombre . ' ' . $alumno->apellido_paterno);
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
