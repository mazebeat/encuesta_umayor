<?php

class RespuestasDetalle extends \Eloquent {

	protected $table      = 'respuestas_detalle';
	protected $primaryKey = 'id_respuesta_detalle';

	// Add your validation rules here
	public static $rules  = array(
	// 'title'            => 'required'
	);
	
	// Don't forget to fill this array
	protected $fillable   = array('valor1', 'valor2', 'id_respuesta');

}