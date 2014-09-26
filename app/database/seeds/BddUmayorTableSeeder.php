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
				'facultad'                 => 'Facultad de Ciencias Silvoagropecuarias',
				'escuela'                  => 'Escuela de Agronomía',
				'carrera'                  => 'Agronomía',
				'jornada'                  => 'Diurno',
				'sede'                     => 'División Santiago',
				'campus'                   => 'Campus Huechuraba',
				'rut'                      => '187699630',
				'apellido_paterno'         => 'CARES',
				'apellido_materno'         => 'REYES',
				'nombres'                  => 'HERNAN',
				'sexo'                     => 'M',
				'año_ingreso_1año_carrera' => 2008,
				'año_egreso_plan_regular'  => 2014,
				'id_negocio'               => 1
			]);
			BddUmayor::create([
				'facultad'                 => 'Instituto Arte y Tecnología Audiovisual',
				'escuela'                  => 'Escuela Animación Digital',
				'carrera'                  => 'Animación Digital',
				'jornada'                  => 'Diurno',
				'sede'                     => 'División Santiago',
				'campus'                   => 'Campus Huechuraba',
				'rut'                      => '191871871',
				'apellido_paterno'         => 'REBOLLEDO',
				'apellido_materno'         => 'GONZALEZ',
				'nombres'                  => 'FELIPE',
				'sexo'                     => 'M',
				'año_ingreso_1año_carrera' => 2014,
				'id_negocio'               => 1
			]);
			BddUmayor::create([
				'facultad'                 => 'Fac. Arquitectura, Diseño y Construcción',
				'escuela'                  => 'Escuela de Arquitectura',
				'carrera'                  => 'Arquitectura',
				'jornada'                  => 'Diurno',
				'sede'                     => 'División Santiago',
				'campus'                   => 'Campus el Claustro',
				'rut'                      => '159014800',
				'apellido_paterno'         => 'JAQUE',
				'apellido_materno'         => 'SOLAR',
				'nombres'                  => 'CESAR',
				'sexo'                     => 'M',
				'año_ingreso_1año_carrera' => 9999,
				'año_ingreso_carrera'      => 2009,
				'id_negocio'               => 1
			]);
			BddUmayor::create([
				'facultad'                 => 'Facultad de Arte',
				'escuela'                  => 'Escuela Artes Visuales',
				'carrera'                  => 'Artes Visuales',
				'jornada'                  => 'Diurno',
				'sede'                     => 'División Santiago',
				'campus'                   => 'Campus Santo Domingo',
				'rut'                      => '153747814',
				'apellido_paterno'         => 'FLORES',
				'apellido_materno'         => 'MUÑOZ',
				'nombres'                  => 'GONZALO',
				'sexo'                     => 'M',
				'año_ingreso_1año_carrera' => 2007,
				'año_egreso_plan_regular'  => 2013,
				'id_negocio'               => 1
			]);
			BddUmayor::create([
				'facultad'                 => 'Facultad de Ciencias',
				'escuela'                  => 'Escuela Biotecnología',
				'carrera'                  => 'Biotecnología',
				'jornada'                  => 'Diurno',
				'sede'                     => 'División Santiago',
				'campus'                   => 'Campus Huechuraba',
				'rut'                      => '188590772',
				'apellido_paterno'         => 'AYALA',
				'apellido_materno'         => 'CASTILLO',
				'nombres'                  => 'JUAN',
				'sexo'                     => 'M',
				'año_ingreso_1año_carrera' => 2014,
				'id_negocio'               => 1
			]);
			//			}
		}

	}