<?php

class CanalConexionsController extends \BaseController
{

	/**
	 * Display a listing of canalconexions
	 *
	 * @return Response
	 */
	public function index()
	{
		$canalconexions = Canal::all();

		return View::make('canalconexions.index', compact('canalconexions'));
	}

	/**
	 * Show the form for creating a new canalconexion
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('canalconexions.create');
	}

	/**
	 * Store a newly created canalconexion in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Canal::$rules);

		if($validator->fails()) {
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Canal::create($data);

		return Redirect::route('canalconexions.index');
	}

	/**
	 * Display the specified canalconexion.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$canalconexion = Canal::findOrFail($id);

		return View::make('canalconexions.show', compact('canalconexion'));
	}

	/**
	 * Show the form for editing the specified canalconexion.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function edit($id)
	{
		$canalconexion = Canal::find($id);

		return View::make('canalconexions.edit', compact('canalconexion'));
	}

	/**
	 * Update the specified canalconexion in storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function update($id)
	{
		$canalconexion = Canal::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Canal::$rules);

		if($validator->fails()) {
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$canalconexion->update($data);

		return Redirect::route('canalconexions.index');
	}

	/**
	 * Remove the specified canalconexion from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		Canal::destroy($id);

		return Redirect::route('canalconexions.index');
	}

}
