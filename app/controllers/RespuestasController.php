<?php

class RespuestasController extends \BaseController {

	/**
	 * Display a listing of respuestas
	 *
	 * @return Response
	 */
	public function index()
	{
		$respuestas = Respuesta::all();

		return View::make('respuestas.index', compact('respuestas'));
	}

	/**
	 * Show the form for creating a new respuesta
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('respuestas.create');
	}

	/**
	 * Store a newly created respuesta in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Respuesta::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Respuesta::create($data);

		return Redirect::route('respuestas.index');
	}

	/**
	 * Display the specified respuesta.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$respuesta = Respuesta::findOrFail($id);

		return View::make('respuestas.show', compact('respuesta'));
	}

	/**
	 * Show the form for editing the specified respuesta.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$respuesta = Respuesta::find($id);

		return View::make('respuestas.edit', compact('respuesta'));
	}

	/**
	 * Update the specified respuesta in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$respuesta = Respuesta::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Respuesta::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$respuesta->update($data);

		return Redirect::route('respuestas.index');
	}

	/**
	 * Remove the specified respuesta from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Respuesta::destroy($id);

		return Redirect::route('respuestas.index');
	}

}
