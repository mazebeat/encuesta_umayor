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
		$e = Encuesta::whereIdEstado(array('3'))->first(array('id_encuesta'));
		if(trim($e != '') && $e != null) {
			Session::put('encuesta', $e->id_encuesta);

			return View::make('encuesta');
		} else {
			Tools::printr('No hay encuestas activas');
			die();
		}
	}

	public function store()
	{
		$pass   = false;
		$inputs = Input::all();

		if(!array_key_exists('pregunta_1', $inputs) OR !array_key_exists('pregunta_2', $inputs) OR !array_key_exists('pregunta_3', $inputs) OR !array_key_exists('pregunta_4', $inputs)) {
			echo $errors = 'Debe contestar todas las preguntas';

			return Redirect::back()->withErrors($errors)->withInput();
		} else {
			foreach($inputs as $key => $value) {
				if($key != '_token') {
					if(array_get($value, 'value', '') == '') {
						echo $errors = 'Debe contestar todas las preguntas';

						return Redirect::back()->withErrors($errors)->withInput();
					}
				}
			}
		}

		$cr                   = new ClientesRespuesta();
		$cr->id_cliente       = Session::get('user_id');
		$cr->ultima_respuesta = Carbon::now();
		$cr->id_estado        = 15;
		if($cr->save()) {
			$cli_resp = $cr->id_cliente_respuesta;
		} else {
			Event::fire('form_error');
		}

		if(!is_null($cli_resp)) {
			$respuesta_detalle = array();

			foreach($inputs as $key => $value) {
				if($key != '_token') {
					$respuesta = Respuesta::insertGetId(array(
						'fecha'                => Carbon::now(),
						'id_estado'            => '6',
						'id_canal'             => Session::get('canal', 3),
						'id_encuesta'          => Session::get('encuesta', 1),
						'id_pregunta'          => (int)str_replace('pregunta_', '', $key),
						'id_pregunta_detalle'  => 1,
						'id_cliente'           => Session::get('user_id'),
						'id_cliente_respuesta' => $cli_resp,
						'created_at'           => Carbon::now()
					));
					if(!is_null($respuesta)) {
						$val  = array_get($value, 'value', '');
						$text = array_get($value, 'text', '');
						array_push($respuesta_detalle, array(
							'valor1'       => trim($val) != '' ? $val : null,
							'valor2'       => trim($text) != '' && Str::length($text) > 0 ? $text : null,
							'id_respuesta' => $respuesta,
							'created_at'   => Carbon::now()
						));
					} else {
						Event::fire('form_error');
					}
				}
			}
		}

		unset($resp_d);
		unset($resp);
		unset($inputs);

		if(RespuestasDetalle::insert($respuesta_detalle)) {
			Session::flush();
			$msg    = array(
				'data' => array(
					'type' => 'success',
					'text' => '<i class="fa fa-check fa-fw"></i>Gracias por tu tiempo y disponibilidad en responder. ¡Tu opinión es muy importante!'
				)
			);
			$script           = "setTimeout('window.location.href=\"http://www.umayor.cl/\";', 5000); if (typeof window.event == 'undefined'){ document.onkeypress = function(e){ var test_var=e.target.nodeName.toUpperCase(); if (e.target.type) var test_type=e.target.type.toUpperCase(); if ((test_var == 'INPUT' && test_type == 'TEXT') || test_var == 'TEXTAREA'){ return e.keyCode; }else if (e.keyCode == 8 || e.keyCode == 116 || e.keyCode == 122){ e.preventDefault(); } } }else{ document.onkeydown = function(){ var test_var=event.srcElement.tagName.toUpperCase(); if (event.srcElement.type) var test_type=event.srcElement.type.toUpperCase(); if ((test_var == 'INPUT' && test_type == 'TEXT') || test_var == 'TEXTAREA'){ return event.keyCode; } else if (event.keyCode == 8 || e.keyCode == 116 || e.keyCode == 122){ event.returnValue=false; } } } ";

			return View::make('messages', compact('msg', 'script'));
		} else {
			Event::fire('form_error');
		}
	}
}
