<?php

	class BddUmayor extends \Eloquent
	{
		protected $table = 'bdd_umayor';
		protected $primaryKey = 'id_alumno';

		public static $rules = array(
			'id_negocio'               => 'required',
			'facultad'                 => 'required',
			'escuela'                  => 'required',
			'carrera'                  => 'required',
			'jornada'                  => 'required',
			'sede'                     => 'required',
			'campus'                   => 'required',
			'rut'                      => 'required',
			'apellido_paterno'         => 'required',
			'apellido_materno'         => 'required',
			'nombre'                   => 'required',
			'año_ingreso_1año_carrera' => 'required',
			'año_ingreso_carrera'      => 'required',
			'año_egreso_plan_regular'  => 'required',
			'fecha_registro'           => 'required',
		);

		// Don't forget to fill this array
//		protected $fillable = array(
//			'id_negocio',
//			'facultad',
//			'escuela',
//			'carrera',
//			'jornada',
//			'sede',
//			'campus',
//			'rut',
//			'apellido_paterno',
//			'apellido_materno',
//			'nombre',
//			'año_ingreso_1año_carrera',
//			'año_ingreso_carrera',
//			'año_egreso_plan_regular',
//			'fecha_registro',
//		);

		public function clientes()
		{
			return $this->hasMany('Cliente', 'bdd_umayor_id_alumno');
		}
	}