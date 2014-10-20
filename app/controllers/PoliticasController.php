<?php

class PoliticasController extends \BaseController
{

	public function __construct()
	{
		$this->beforeFilter('auth');
		$this->beforeFilter('csrf');
	}

	public function index()
	{
		return View::make('politicas');
	}
}
