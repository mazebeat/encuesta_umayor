<?php

class CanalConexion extends \Eloquent {

	protected $table      = 'canal_conexiones';
	protected $primaryKey = 'id_canal';

	// Add your validation rules here
	public static $rules  = array(
	// 'title'            => 'required'
	);
	
	// Don't forget to fill this array
	protected $fillable   = array();

}