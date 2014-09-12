<?php

class User_answer extends \Eloquent
{
	protected $table = 'users';
	protected $primaryKey = 'id';
	protected $guarded = array();
	protected $fillable = array();
	protected $hidden = array();

	public static $rules = array(// 'title' => 'required'
	);

	public function question_answer()
	{
		return $this->belongsTo('Question_answer', 'id');
	}

}