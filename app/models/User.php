<?php

use Illuminate\Auth\Reminders\RemindableInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\UserTrait;

/**
 * User
 *
 * @property integer                                                         $id
 * @property string                                                          $email
 * @property string                                                          $password
 * @property \Carbon\Carbon                                                  $created_at
 * @property \Carbon\Carbon                                                  $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\QuestionAnswer[] $questionAnswers
 * @property-read \Illuminate\Database\Eloquent\Collection|\UserAnswer[]     $userAnswer
 * @method static \Illuminate\Database\Query\Builder|\User whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\User whereEmail($value)
 * @method static \Illuminate\Database\Query\Builder|\User wherePassword($value)
 * @method static \Illuminate\Database\Query\Builder|\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\User whereUpdatedAt($value)
 */
class User extends Eloquent implements UserInterface, RemindableInterface
{
	use UserTrait, RemindableTrait;

	protected $table = 'users';
	protected $primaryKey = 'id';
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
