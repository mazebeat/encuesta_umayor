<?php

class PreguntasController extends \BaseController
{

	/**
	 * Display a listing of preguntas
	 *
	 * @return Response
	 */
	public function index()
	{
		$preguntas = Pregunta::all();

		return View::make('preguntas.index', compact('preguntas'));
	}

	/**
	 * Show the form for creating a new pregunta
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('preguntas.create');
	}

	/**
	 * Store a newly created pregunta in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Pregunta::$rules);

		if($validator->fails()) {
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Pregunta::create($data);

		return Redirect::route('preguntas.index');
	}

	/**
	 * Display the specified pregunta.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$pregunta = Pregunta::findOrFail($id);

		return View::make('preguntas.show', compact('pregunta'));
	}

	/**
	 * Show the form for editing the specified pregunta.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function edit($id)
	{
		$pregunta = Pregunta::find($id);

		return View::make('preguntas.edit', compact('pregunta'));
	}

	/**
	 * Update the specified pregunta in storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function update($id)
	{
		$pregunta = Pregunta::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Pregunta::$rules);

		if($validator->fails()) {
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$pregunta->update($data);

		return Redirect::route('preguntas.index');
	}

	/**
	 * Remove the specified pregunta from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		Pregunta::destroy($id);

		return Redirect::route('preguntas.index');
	}

}
