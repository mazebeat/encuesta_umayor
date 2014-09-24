<?php

class EncuestasController extends \BaseController {

	/**
	 * Display a listing of encuestas
	 *
	 * @return Response
	 */
	public function index()
	{
		//		$survey = new Encuesta();
		//		$survey = $survey->whereState(true)->firstOrFail();
		//		$questions = new Question();
		//		$questions = $questions->select(array('id', 'text'))->where('state', true)->where('survey_id', 1)->get();
		//		return View::make('showSurvey')->with('survey', $survey)->with('questions', $questions);
		return View::make('encuesta');

//		$encuestas = Encuesta::all();
//
//		return View::make('encuestas.index', compact('encuestas'));
	}

	/**
	 * Show the form for creating a new encuesta
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('encuestas.create');
	}

	/**
	 * Store a newly created encuesta in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		if($user_id = Session::get('ses_user', 0) == 0) {
			$msg = array(
				'data' => array(
					'type' => 'danger',
					'title' => 'Atención',
					'text' => 'Usuario no logueado'
				),
			    'options' => array(
				    'left' => HTML::link(URL::previous(), 'Volver', array('class' => 'col-md-3 btn btn-default btn-lg pull-right text-uppercase'))
			    )
			);

			return View::make('messages')->with('msg', $msg);
		}
		$pass   = true; // false
		$inputs = Input::except('_token');

		//		$question        = new Question();
		//		$question_answer = new QuestionAnswer();

		//		echo "<pre>";
		//		var_dump(Input::all());
		//		echo "</pre>";
		//		die();
		//		foreach($inputs as $question_id => $answer_id) {
		//			$new_question_answer_id = $question_answer->returnId((int)$question_id, (int)$answer_id);
		//			$responsed              = $question->responsed((int)$user_id, (int)$question_id);
		//			if(count($responsed)) {
		//				$responsed->pivot->state = false;
		//				$responsed->pivot->save();
		//			}
		//			$user_answer                     = new UserAnswer();
		//			$user_answer->user_id            = (int)$user_id;
		//			$user_answer->state              = true;
		//			$user_answer->question_answer_id = (int)$new_question_answer_id;
		//			$user_answer->save();
		//			$pass = true;
		//		}
		//		unset($inputs);
		//		unset($question);
		//		unset($question_answer);

		if($pass) {
			$msg = array(
				'data' => array(
					'type' => 'success',
					'text' => '<i class="fa fa-check fa-fw"></i>Gracias por tu tiempo y disponibilidad en responder. ¡Tu opinión es muy importante!'
				)
			);
			return View::make('messages')->with('msg', $msg);
		} else {
			$msg = array(
				'data' => array(
					'type' => 'danger',
					'text' => 'Error al enviar el formulario'
				)
			);
			return Redirect::back()->with('msg', $msg);
		}
		
		// $validator = Validator::make($data = Input::all(), Encuesta::$rules);

		// if ($validator->fails())
		// {
		// 	return Redirect::back()->withErrors($validator)->withInput();
		// }

		// Encuesta::create($data);

		// return Redirect::route('encuestas.index');
	}

	/**
	 * Display the specified encuesta.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$encuesta = Encuesta::findOrFail($id);

		return View::make('encuestas.show', compact('encuesta'));
	}

	/**
	 * Show the form for editing the specified encuesta.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$encuesta = Encuesta::find($id);

		return View::make('encuestas.edit', compact('encuesta'));
	}

	/**
	 * Update the specified encuesta in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$encuesta = Encuesta::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Encuesta::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$encuesta->update($data);

		return Redirect::route('encuestas.index');
	}

	/**
	 * Remove the specified encuesta from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Encuesta::destroy($id);

		return Redirect::route('encuestas.index');
	}

}
