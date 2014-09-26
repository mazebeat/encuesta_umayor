<?php

class TiposRespuesta extends \Eloquent {

	protected $table      = 'tipos_respuesta';
	protected $primaryKey = 'id_tipo_respuesta';

	// Add your validation rules here
	public static $rules  = array(
	// 'title'            => 'required'
	);
	
	// Don't forget to fill this array
	protected $fillable   = array();

}