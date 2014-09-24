<?php

class BddUmayorsController extends \BaseController {

	/**
	 * Display a listing of bddumayors
	 *
	 * @return Response
	 */
	public function index()
	{
		$bddumayors = Bddumayor::all();

		return View::make('bddumayors.index', compact('bddumayors'));
	}

	/**
	 * Show the form for creating a new bddumayor
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('bddumayors.create');
	}

	/**
	 * Store a newly created bddumayor in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Bddumayor::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Bddumayor::create($data);

		return Redirect::route('bddumayors.index');
	}

	/**
	 * Display the specified bddumayor.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$bddumayor = Bddumayor::findOrFail($id);

		return View::make('bddumayors.show', compact('bddumayor'));
	}

	/**
	 * Show the form for editing the specified bddumayor.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$bddumayor = Bddumayor::find($id);

		return View::make('bddumayors.edit', compact('bddumayor'));
	}

	/**
	 * Update the specified bddumayor in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$bddumayor = Bddumayor::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Bddumayor::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$bddumayor->update($data);

		return Redirect::route('bddumayors.index');
	}

	/**
	 * Remove the specified bddumayor from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Bddumayor::destroy($id);

		return Redirect::route('bddumayors.index');
	}

}
