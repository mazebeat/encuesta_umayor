<?php

class QuestionAnswer extends Eloquent
{
	protected $table = 'question_answer';
	protected $primaryKey = 'id';
	protected $fillable = array();
	protected $hidden = array();

	public static $rules = array(// 'title' => 'required'
	);
}