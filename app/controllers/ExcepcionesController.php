<?php

class ExcepcionesController extends \BaseController
{

	public function __construct()
	{
		$this->beforeFilter('auth.login');
	}

	public function add()
	{
		if(Session::has('user_id')) {
			$e               = new ExcepcionesCliente();
			$e->fecha        = Carbon::now();
			$e->id_cliente   = Session::get('user_id');
			$e->id_excepcion = 1;
			if($e->save()) {
				Session::flush();
				if(Request::ajax()) {
					return 'OK';
				}

				return Redirect::route('home.index');
			}
		} else {
			return Redirect::to('http://www.umayor.cl');
		}
	}
}