<?php

	class Negocio extends \Eloquent
	{

		public static $rules = array(
			'descripcion' => 'required',
			'estado'      => 'required'
		);
		protected $table = 'negocios';

		// Add your validation rules here
		protected $primaryKey = 'id_negocio';

		// Don't forget to fill this array
		protected $fillable = array(
			'descripcion',
			'estado'
		);

	}