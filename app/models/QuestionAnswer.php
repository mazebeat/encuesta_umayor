<?php

class QuestionAnswer extends Eloquent
{
	protected $table = 'question_answer';
	protected $primaryKey = 'id';
	protected $fillable = array();

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