<?php

class HomeController extends BaseController
{

	public function index($canal = null)
	{
		$date = Carbon::now();

		if(!($date->month == 1 || $date->month == 2) && $canal != null && ($canal == 'fa' || $canal == 'em' || $canal == 'ce' || $canal == 'ca')) {
			Event::fire('canal', array(array('canal' => $canal)));

			return View::make('index');
		}

		return Redirect::to('http://www.umayor.cl/');
	}

	public function login()
	{
		$rules = array('rut' => 'required|between:8,9|alpha_num|rut|exist_rut');

		$validator = Validator::make(Input::all(), $rules);

		if($validator->fails()) {
			if(Request::ajax()) {
				return json_encode('ERROR');
			}

			return Redirect::back()->withErrors($validator->messages())->withInput();
		}

		Event::fire('carga_cliente', array(Input::get('rut')));

		$ultima_respuesta = Event::fire('ya_respondio')[0];

		if(!is_null($ultima_respuesta)) {
			$msg = array(
				'data'    => array(
					'type'  => 'warning',
					'title' => Session::get('user_name'),
					'text' => 'En el actual periodo, ya registramos tus respuestas con fecha <b>' . $ultima_respuesta->format('d-m-Y') . '</b> a las <b>' . $ultima_respuesta->toTimeString() . '</b>, ¿Deseas actualizar esta información?',
				),
				'options' => array(
					HTML::link('#', 'NO', array(
						'class' => 'col-xs-4 col-sm-4 col-md-3 btn btn-default btn-lg text-uppercase',
						'id'    => 'btn_neg'
					)),
					HTML::link('encuestas', 'SÍ', array(
						'class' => 'col-xs-4 col-sm-4 col-md-3 btn btn-hot btn-lg text-uppercase pull-right',
					))
				)
			);

			if(Request::ajax()) {
				return json_encode($msg);
			}

			return View::make('messages')->with('msg', $msg);
		} else {
			if(Request::ajax()) {
				return json_encode('OK');
			}

			return Redirect::to('encuestas');
		}
	}

	public function logout()
	{
		Session::flush();
		Auth::logout();
		if(Request::ajax()) {
			return $msg = 'OK';
		}

		return Redirect::to('/');
	}
}
