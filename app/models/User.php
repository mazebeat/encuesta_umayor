<?php

use Illuminate\Auth\Reminders\RemindableInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\UserTrait;

class User extends Eloquent implements UserInterface, RemindableInterface
{
	use UserTrait, RemindableTrait;

	protected $table = 'users';
	protected $primaryKey = 'id';
	protected $fillable = array();
	protected $hidden = array('password', 'remember_token');

	public function questionAnswers()
	{
		return $this->belongsToMany('QuestionAnswer', 'user_answer', 'user_id', 'question_answer_id');
	}

	public function userAnswer()
	{
		return $this->hasMany('UserAnswer', 'user_id');
	}

	public function surveyComplete($user_id, $survey_id)
	{
		$question  = new Question();
		$questions = $question->whereState(true)->whereSurveyId($survey_id)->get();
		foreach($questions as $value) {
			$responsed = $question->responsed((int)$user_id, (int)$value->id);

			if(!count($responsed))
				return false;
		}

		return true;
	}
}
