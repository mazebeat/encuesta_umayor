<?php

class HomeController extends BaseController
{

	public function index($canal = null)
	{
		if($canal != null) {
			Event::fire('canal', array(array('canal' => $canal)));
		}

		return View::make('index');
	}

	public function login()
	{
		$rules = array('rut' => 'required|between:8,9|alpha_num|rut|exist_rut');

		$validator = Validator::make(Input::all(), $rules);

		if($validator->fails()) {
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
					link_to_route('encuestas.index', 'SI', array(), array('class' => 'col-xs-4 col-sm-4 col-md-3 btn btn-hot btn-lg text-uppercase pull-right'))
				)
			);

			return View::make('messages')->with('msg', $msg);
		} else {
			return Redirect::route('encuestas.index');
		}
	}

	public function logout()
	{
		Session::flush();
		if(Request::ajax()) {
			return $msg = 'OK';
		}

		return Redirect::route('home.index');
	}
}
