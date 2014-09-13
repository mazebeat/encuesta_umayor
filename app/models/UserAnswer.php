<?php

class UserAnswer extends \Eloquent
{
	protected $table = 'user_answer';
	protected $primaryKey = 'id';
	protected $guarded = array();
	protected $fillable = array();
	protected $hidden = array();

	public static $rules = array(// 'title' => 'required'
	);

	public function user_answer()
	{
		return $this->belongsTo('UserAnswer', 'id');
	}

	public function question_answer()
	{
		return $this->belongsTo('QuestionAnswer', 'id');
	}

}