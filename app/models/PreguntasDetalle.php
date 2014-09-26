<?php

class PreguntasDetalle extends \Eloquent {

	protected $table      = 'preguntas_detalle';
	protected $primaryKey = 'id_pregunta_detalle';

	// Add your validation rules here
	public static $rules  = array(
	// 'title'            => 'required'
	);
	
	// Don't forget to fill this array
	protected $fillable   = array();

}