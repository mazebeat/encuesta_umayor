<?php

	class Pregunta extends \Eloquent
	{

		public static $rules = array(
			'estado'        => 'required',
			'descripcion_1' => 'required',
			'descripcion_2' => 'required',
			'descripcion_3' => 'required',
		);
		protected $table = 'preguntas';

		// Add your validation rules here
		protected $primaryKey = 'id_pregunta';

		// Don't forget to fill this array
		protected $fillable = array(
			'estado',
			'descripcion_1',
			'descripcion_2',
			'descripcion_3'
		);
	}

	