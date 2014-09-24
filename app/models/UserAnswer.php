<?php

class UserAnswer extends Eloquent
{
	protected $table = 'user_answer';
	protected $primaryKey = 'id';
	protected $fillable = array();

	public function user()
	{
		return $this->belongsTo('User');
	}

	public function questionAnswer()
	{
		return $this->belongsTo('QuestionAnswer');
	}
}