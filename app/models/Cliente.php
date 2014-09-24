<?php

class Cliente extends \Eloquent {

	protected $table      = 'clientes';
	protected $primaryKey = 'id_cliente';

	// Add your validation rules here
//	public static $rules  = array(
//		'id_negocio' => 'required',
//		'estado' => 'required',
//		'bdd_umayor_id_alumno' => 'readdir()quired',
//		);
	
	// Don't forget to fill this array
//	protected $fillable   = array(
//		'id_negocio',
//		'estado',
//		'bdd_umayor_id_alumno',
//		'excepciones_clientes_clientes_id_negocio',
//		'excepciones_clientes_clientes_id_cliente',
//		'excepciones_clientes_clientes_bdd_umayor_id_alumno',
//		);
	public function test()
	{
		return $this->belongsTo('Test');
	}

	public function bddumayor()
	{
		return $this->belongsTo('BddUmayor');
	}

}