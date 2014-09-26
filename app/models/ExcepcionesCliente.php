<?php

class ExcepcionesCliente extends \Eloquent {

	protected $table      = 'excepciones_cliente';
	protected $primaryKey = 'id_excepcion_cliente';

	// Add your validation rules here
	public static $rules  = array(
	// 'title'            => 'required'
	);
	
	// Don't forget to fill this array
	protected $fillable   = array();

}