<?php

class EncuestasController extends \BaseController
{
	public function __construct()
	{
		$this->beforeFilter('auth.login');
		$this->beforeFilter('csrf');
	}

	/**
	 * Display a listing of encuestas
	 *
	 * @return Response
	 */
	public function index()
	{
		$this->verify_login();

		$encuesta = new Encuesta();
		$id       = $encuesta->select('id_encuesta')->whereIdEstado(1)->first(array('id_encuesta'))->id_encuesta;
		if(!empty($id) && $id != null) {
			Session::put('encuesta', $id);

			return View::make('encuesta');
		} else {
			Tools::printr('No hay encuenstas activas');
			die();
		}
	}

	/**
	 * Show the form for creating a new encuesta
	 *
	 * @return Response
	 */
	public function create()
	{
		$this->verify_login();

		return View::make('encuestas.create');
	}

	/**
	 * Store a newly created encuesta in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$this->verify_login();
		$pass   = false;
		$inputs = Input::all();

		foreach($inputs as $key => $value) {
			if($key != '_token') {
				if(!empty($value)) {
					$resp                      = new Respuesta;
					$resp->fecha               = Carbon::now();
					$resp->id_estado           = 1;
					$resp->id_canal            = Session::get('canal', 3);
					$resp->id_encuesta         = Session::get('encuesta', 1);
					$resp->id_pregunta         = (int)str_replace('pregunta_', '', $key);
					$resp->id_pregunta_detalle = 1; // ????
					$resp->id_cliente          = Session::get('user_id');
					if($resp->save()) {
						$resp_d               = new RespuestasDetalle;
						$resp_d->valor1       = isset($value['value']) ? $value['value'] : null;
						$resp_d->valor2       = isset($value['text']) && !empty(trim($value['text'])) ? $value['text'] : null;
						$resp_d->id_respuesta = $resp->id_respuesta;
						if($resp_d->save()) {
							$pass = true;
						}
					}
					unset($resp_d);
					unset($resp);
				}
			}
		}
		unset($inputs);

		if($pass) {
			$msg = array(
				'data' => array(
					'type' => 'success',
					'text' => '<i class="fa fa-check fa-fw"></i>Gracias por tu tiempo y disponibilidad en responder. ¡Tu opinión es muy importante!'
				)
			);
			Input::flush();
			Session::flush();

			return View::make('messages', compact('msg'));
		} else {
			$msg = array(
				'data' => array(
					'type' => 'danger',
					'text' => 'Error al enviar el formulario'
				)
			);

			return Redirect::back()->with('msg', $msg)->withInput(Input::all());
		}
	}

	/**
	 * Display the specified encuesta.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$encuesta = Encuesta::findOrFail($id);

		return View::make('encuestas.show', compact('encuesta'));
	}

	/**
	 * Show the form for editing the specified encuesta.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function edit($id)
	{
		$encuesta = Encuesta::find($id);

		return View::make('encuestas.edit', compact('encuesta'));
	}

	/**
	 * Update the specified encuesta in storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function update($id)
	{
		$encuesta = Encuesta::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Encuesta::$rules);

		if($validator->fails()) {
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$encuesta->update($data);

		return Redirect::route('encuestas.index');
	}

	/**
	 * Remove the specified encuesta from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		Encuesta::destroy($id);

		return Redirect::route('encuestas.index');
	}

}
