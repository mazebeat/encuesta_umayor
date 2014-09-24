<?php

	class Encuesta extends \Eloquent
	{

		public static $rules = array(
			'titulo'             => 'required',
			'estado'             => 'required',
			'fecha_Creacion'     => 'required',
			'fecha_Modificacion' => 'required'
		);
		protected $table = 'encuestas';

		// Add your validation rules here
		protected $primaryKey = 'id_encuesta';

		// Don't forget to fill this array
		protected $fillable = array(
			'id_Negocio',
			'titulo',
			'estado',
			'fecha_Creacion',
			'fecha_Modificacion'
		);

	}