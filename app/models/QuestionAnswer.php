<?php

/**
 * QuestionAnswer
 *
 * @property integer                                                     $id
 * @property integer                                                     $question_id
 * @property integer                                                     $answer_id
 * @property \Carbon\Carbon                                              $created_at
 * @property \Carbon\Carbon                                              $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\User[]       $users
 * @property-read \Illuminate\Database\Eloquent\Collection|\UserAnswer[] $userAnswer
 * @method static \Illuminate\Database\Query\Builder|\QuestionAnswer whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\QuestionAnswer whereQuestionId($value)
 * @method static \Illuminate\Database\Query\Builder|\QuestionAnswer whereAnswerId($value)
 * @method static \Illuminate\Database\Query\Builder|\QuestionAnswer whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\QuestionAnswer whereUpdatedAt($value)
 */
class QuestionAnswer extends Eloquent
{
	protected $table = 'question_answer';
	protected $primaryKey = 'id';
	//	protected $fillable = array();
	//	protected $hidden = array('id');
	//	public static $rules = array(// 'title' => 'required');

	public function users()
	{
		return $this->belongsToMany('User', 'user_answer', 'question_answer_id', 'user_id');
	}

	public function userAnswer()
	{
		return $this->hasMany('UserAnswer', 'question_answer_id');
	}

	public function returnId($question_id, $answer_id)
	{
		if($id = $this->select('id')->whereQuestionId($question_id)->whereAnswerId($answer_id)->first())
			return $id->id;

		return false;
	}

	public function scopeActive($query)
	{
		return $query->whereState(true);
	}
}