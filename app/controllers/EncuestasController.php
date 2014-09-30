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
		$e = Encuesta::select('id_encuesta')->whereIdEstado(1)->remember(5)->first('id_encuesta');
		if(!empty($e) && $e != null) {
			Session::put('encuesta', $e->id_encuesta);

			return View::make('encuesta');
		} else {
			Tools::printr('No hay encuenstas activas');
			die();
		}
	}

	/**
	 * Store a newly created encuesta in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$pass   = false;
		$inputs = Input::all();

		foreach($inputs as $key => $value) {
			if($key != '_token') {
				if(!empty($value)) {
					$resp                      = new Respuesta;
					$resp->fecha               = Carbon::now();
					$resp->id_estado           = 6;
					$resp->id_canal            = Session::get('canal', 3);
					$resp->id_encuesta         = Session::get('encuesta', 1);
					$resp->id_pregunta         = (int)str_replace('pregunta_', '', $key);
					$resp->id_pregunta_detalle = 1;
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
			unset($pass);
			return View::make('messages', compact('msg'));
		} else {
			$msg = array(
				'data' => array(
					'type' => 'danger',
					'text' => 'Error al enviar el formulario'
				)
			);
			unset($pass);
			return Redirect::back()->with('msg', $msg)->withInput(Input::all());
		}
	}
}
