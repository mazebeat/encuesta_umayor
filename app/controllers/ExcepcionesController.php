<?php

class ExcepcionesController extends \BaseController
{

	public function __construct()
	{
		$this->beforeFilter('auth.login');
	}

	public function add()
	{
		$e               = new ExcepcionesCliente();
		$e->fecha        = Carbon::now();
		$e->id_cliente   = Session::get('user_id');
		$e->id_excepcion = 1;
		if($e->save()) {
			Session::flush();
			return Redirect::route('home.index');
		}
	}

}