<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

/**
 * User
 *
 * @property integer $id
 * @property string $email
 * @property string $password
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\QuestionAnswer[] $questionAnswers
 * @property-read \Illuminate\Database\Eloquent\Collection|\UserAnswer[] $userAnswer
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
	protected $hidden = array('id', 'password', 'remember_token');

	public function questionAnswers()
	{
		return $this->belongsToMany('QuestionAnswer', 'user_answer', 'user_id', 'question_answer_id');
	}

	public function userAnswer()
	{
		return $this->hasMany('UserAnswer', 'user_id');
	}
}
