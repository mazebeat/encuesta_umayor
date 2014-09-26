<?php

/**
 * Respuesta
 *
 */
class Respuesta extends \Eloquent {

	protected $table      = 'respuestas';
	protected $primaryKey = 'id_respuesta';

	// Add your validation rules here
	public static $rules  = array(
	// 'title'            => 'required'
	);
	
	// Don't forget to fill this array
	protected $fillable   = array();
}