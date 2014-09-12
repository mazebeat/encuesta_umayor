<?php

class Answer extends Eloquent
{
	protected $table = 'answer';
	protected $primaryKey = 'id';
	protected $fillable = array('text', 'state');
	protected $hidden = array();

	public static $rules = array(// 'title' => 'required'
	);
}