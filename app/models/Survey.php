<?php

class Survey extends Eloquent
{
	protected $table = 'survey';
	protected $primaryKey = 'id';
	protected $fillable = array();
	protected $hidden = array();

	public static $rules = array(// 'title' => 'required'
	);
}