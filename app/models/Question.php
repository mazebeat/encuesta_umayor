<?php

class Question extends Eloquent
{
	protected $table = 'questions';
	protected $primaryKey = 'id';
	protected $fillable = array();

	public function survey()
	{
		return $this->belongsTo('Survey');
	}

	public function answers()
	{
		return $this->belongsToMany('Answer', 'question_answer', 'question_id', 'answer_id');
	}

	public function responsed($user_id, $question_id)
	{
		$user = new User();

		//		Func::printr(($user->find($user_id)->questionAnswers()->where('question_id', $question_id)->where('state', true)->first()));
		return $user->find($user_id)->questionAnswers()->where('question_id', $question_id)->where('state', true)->first();
	}

	public function scopeActive($query)
	{
		return $query->whereState(true);
	}
}