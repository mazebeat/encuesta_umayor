<?php

	// Composer: "fzaninotto/faker": "v1.3.0"
	use Faker\Factory as Faker;

	class BddUmayorTableSeeder extends Seeder
	{

		public function run()
		{
			$faker = Faker::create();

			//			foreach(range(1, 10) as $index) {
			BddUmayor::create([
				'facultad'                 => '',
				'escuela'                  => '',
				'carrera'                  => '',
				'jornada'                  => '',
				'sede'                     => '',
				'campus'                   => '',
				'rut'                      => '',
				'apellido_paterno'         => '',
				'apellido_materno'         => '',
				'nombres'                  => '',
				'sexo'                     => '',
				'año_ingreso_1año_carrera' => '',
				'año_ingreso_carrera'      => '',
				'año_egreso_plan_regular'  => '',
				'fecha_registro'           => '',
				'id_negocio'               => '',
				'id_negocio'               => ''
			]);
			//			}
		}

	}