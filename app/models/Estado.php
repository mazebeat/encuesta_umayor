<?php

/**
 * Estado
 *
 */
class Estado extends \Eloquent {

	protected $table      = 'estados';
	protected $primaryKey = 'id_estado';

	// Add your validation rules here
	public static $rules  = array(
	// 'title'            => 'required'
	);
	
	// Don't forget to fill this array
	protected $fillable   = array();

}