<?php

class EstadosController extends \BaseController {

	/**
	 * Display a listing of estados
	 *
	 * @return Response
	 */
	public function index()
	{
		$estados = Estado::all();

		return View::make('estados.index', compact('estados'));
	}

	/**
	 * Show the form for creating a new estado
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('estados.create');
	}

	/**
	 * Store a newly created estado in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Estado::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Estado::create($data);

		return Redirect::route('estados.index');
	}

	/**
	 * Display the specified estado.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$estado = Estado::findOrFail($id);

		return View::make('estados.show', compact('estado'));
	}

	/**
	 * Show the form for editing the specified estado.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$estado = Estado::find($id);

		return View::make('estados.edit', compact('estado'));
	}

	/**
	 * Update the specified estado in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$estado = Estado::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Estado::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$estado->update($data);

		return Redirect::route('estados.index');
	}

	/**
	 * Remove the specified estado from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Estado::destroy($id);

		return Redirect::route('estados.index');
	}

}
