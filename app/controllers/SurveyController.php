<?php

class SurveyController extends BaseController
{

	/**
	 * Display a listing of the resource.
	 * GET /survey
	 *
	 * @return Response
	 */
	public function index()
	{
		$questions = Question::all();

		return View::make('showSurvey')->with('questions', $questions);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /survey/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /survey
	 *
	 * @return Response
	 */
	public function store()
	{
		$user_id         = 1;
		$inputs          = Input::except('_token');
		$question        = new Question();
		$question_answer = new QuestionAnswer();
		$user            = new User();

		foreach($inputs as $question_id => $answer_id) {
			$new_question_answer_id = $question_answer->returnId((int)$question_id, (int)$answer_id);
			$responsed              = $question->responsed((int)$user_id, (int)$question_id);
			if(count($responsed)) {
				$responsed->pivot->state = false;
				$responsed->pivot->save();
			}
			$user_answer                     = new UserAnswer();
			$user_answer->user_id            = (int) $user_id;
			$user_answer->state              = true;
			$user_answer->question_answer_id = (int) $new_question_answer_id;
			$user_answer->save();
		}
	}

	/**
	 * Display the specified resource.
	 * GET /survey/{id}
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /survey/{id}/edit
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /survey/{id}
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /survey/{id}
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}
}