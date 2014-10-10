<?php

class PoliticasController extends \BaseController
{

	public function __construct()
	{
		$this->beforeFilter('auth.login');
	}

	public function index()
	{
		return View::make('politicas');
	}
}