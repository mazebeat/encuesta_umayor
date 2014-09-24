<?php

class Respuesta extends Eloquent
{
	protected $table = 'respuestas';
	protected $primaryKey = 'id';
	protected $fillable = array();

	public function questions()
	{
		return $this->belongsToMany('Question', 'question_answer', 'answer_id', 'question_id');
	}
}