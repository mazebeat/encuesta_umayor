<?php

class Excepcion extends \Eloquent {

	protected $table      = 'excepciones';
	protected $primaryKey = 'id_excepcion';

	// Add your validation rules here
	public static $rules  = array(
	// 'title'            => 'required'
	);
	
	// Don't forget to fill this array
	protected $fillable   = array();

}