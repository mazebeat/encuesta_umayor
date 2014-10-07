<?php

class EncuestasController extends \BaseController
{
	public function __construct()
	{
		$this->beforeFilter('auth.login');
		$this->beforeFilter('csrf');
	}

	public function index()
	{
		$e = Encuesta::select('id_encuesta')->whereIdEstado(1)->first('id_encuesta');
		if(!empty($e) && $e != null) {
			Session::put('encuesta', $e->id_encuesta);

			return View::make('encuesta');
		} else {
			Tools::printr('No hay encuenstas activas');
			die();
		}
	}

	public function store()
	{
		$pass = false;

		foreach($inputs = Input::all() as $key => $value) {
			if($key != '_token') {
				if(array_get($value, 'value', '') == '' || Str::length(array_get($value, 'value', '')) == 0) {
					$errors = 'Debe contestar todas las preguntas';

					return Redirect::back()->withErrors($errors)->withInput();
				}
			}
		}

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
			Session::flush();
			$msg    = array(
				'data' => array(
					'type' => 'success',
					'text' => '<i class="fa fa-check fa-fw"></i>Gracias por tu tiempo y disponibilidad en responder. ¡Tu opinión es muy importante!'
				),
				'options' => array(
					"<script>setTimeout('window.location.href=\"/\";', 5000);</script>"
				)
			);
			$script = "if (typeof window.event == 'undefined'){ document.onkeypress = function(e){ var test_var=e.target.nodeName.toUpperCase(); if (e.target.type) var test_type=e.target.type.toUpperCase(); if ((test_var == 'INPUT' && test_type == 'TEXT') || test_var == 'TEXTAREA'){ return e.keyCode; }else if (e.keyCode == 8 || e.keyCode == 116 || e.keyCode == 122){ e.preventDefault(); } } }else{ document.onkeydown = function(){ var test_var=event.srcElement.tagName.toUpperCase(); if (event.srcElement.type) var test_type=event.srcElement.type.toUpperCase(); if ((test_var == 'INPUT' && test_type == 'TEXT') || test_var == 'TEXTAREA'){ return event.keyCode; } else if (event.keyCode == 8 || e.keyCode == 116 || e.keyCode == 122){ event.returnValue=false; } } } ";
			unset($pass);

			return View::make('messages', compact('msg'))->with('script', $script);
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
