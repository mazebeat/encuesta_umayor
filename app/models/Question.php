<?php

class Question extends Eloquent
{
	protected $table = 'question';
	protected $primaryKey = 'id';
	protected $fillable = array('text');
	protected $hidden = array();

	public static $rules = array(// 'title' => 'required'
	);

	public function answers()
	{
		return $this->belongsToMany('Answer', 'question_answer', 'question_id', 'answer_id');
	}

}