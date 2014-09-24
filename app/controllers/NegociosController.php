<?php

class NegociosController extends \BaseController {

	/**
	 * Display a listing of negocios
	 *
	 * @return Response
	 */
	public function index()
	{
		$negocios = Negocio::all();

		return View::make('negocios.index', compact('negocios'));
	}

	/**
	 * Show the form for creating a new negocio
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('negocios.create');
	}

	/**
	 * Store a newly created negocio in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Negocio::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Negocio::create($data);

		return Redirect::route('negocios.index');
	}

	/**
	 * Display the specified negocio.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$negocio = Negocio::findOrFail($id);

		return View::make('negocios.show', compact('negocio'));
	}

	/**
	 * Show the form for editing the specified negocio.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$negocio = Negocio::find($id);

		return View::make('negocios.edit', compact('negocio'));
	}

	/**
	 * Update the specified negocio in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$negocio = Negocio::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Negocio::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$negocio->update($data);

		return Redirect::route('negocios.index');
	}

	/**
	 * Remove the specified negocio from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Negocio::destroy($id);

		return Redirect::route('negocios.index');
	}

}
