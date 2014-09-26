<?php

	// Composer: "fzaninotto/faker": "v1.3.0"
	use Faker\Factory as Faker;

	class EstadosTableSeeder extends Seeder
	{

		public function run()
		{
			$faker = Faker::create();

			//			foreach(range(1, 10) as $index) {
			/**
			 * Activo
			 */
			Estado::create([
				'tipo'        => 'Activo',
				'descripcion' => 'Activo Negocio',
			]);
			Estado::create([
				'tipo'        => 'Activo',
				'descripcion' => 'Activo Cliente',
			]);
			Estado::create([
				'tipo'        => 'Activo',
				'descripcion' => 'Activo Encuesta',
			]);
			Estado::create([
				'tipo'        => 'Activo',
				'descripcion' => 'Activo Pregunta',
			]);
			Estado::create([
				'tipo'        => 'Activo',
				'descripcion' => 'Activo Pregunta Detalle',
			]);
			Estado::create([
				'tipo'        => 'Activo',
				'descripcion' => 'Activo Respuesta',
			]);
			/**
			 * Inactivos
			 */
			Estado::create([
				'tipo'        => 'Inactivo',
				'descripcion' => 'Inactivo Negocio',
			]);
			Estado::create([
				'tipo'        => 'Inactivo',
				'descripcion' => 'Inactivo Cliente',
			]);
			Estado::create([
				'tipo'        => 'Inactivo',
				'descripcion' => 'Inactivo Encuesta',
			]);
			Estado::create([
				'tipo'        => 'Inactivo',
				'descripcion' => 'Inactivo Pregunta',
			]);
			Estado::create([
				'tipo'        => 'Inactivo',
				'descripcion' => 'Inactivo Pregunta Detalle',
			]);
			Estado::create([
				'tipo'        => 'Inactivo',
				'descripcion' => 'Inactivo Respuesta',
			]);
			//			}
		}

	}