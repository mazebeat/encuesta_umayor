<?php

/**
 * Respuesta
 *
 */
class Respuesta extends \Eloquent {

	protected $table      = '';
	protected $primaryKey = '';

	// Add your validation rules here
	public static $rules  = array(
	// 'title'            => 'required'
	);
	
	// Don't forget to fill this array
	protected $fillable   = array();

}