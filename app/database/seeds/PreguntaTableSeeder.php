<?php

	// Composer: "fzaninotto/faker": "v1.3.0"
	use Faker\Factory as Faker;

	class PreguntaTableSeeder extends Seeder
	{

		public function run()
		{
			$faker = Faker::create();

			//		foreach(range(1, 10) as $index)
			//		{
			//			Preguntas::create([
			//
			//			]);
			//		}
			Preguntas::create([
				array(
					'id_encuesta'   => 1,
					'estado'        => 1,
					'descripcion_1' => '',
					'descripcion_2' => '',
					'descripcion_3' => '',
				)
			]);
			Preguntas::create([
				array(
					'id_encuesta'   => 1,
					'estado'        => 1,
					'descripcion_1' => '',
					'descripcion_2' => '',
					'descripcion_3' => '',
				)
			]);
			Preguntas::create([
				array(
					'id_encuesta'   => 1,
					'estado'        => 1,
					'descripcion_1' => '',
					'descripcion_2' => '',
					'descripcion_3' => '',
				)
			]);
			Preguntas::create([
				array(
					'id_encuesta'   => 1,
					'estado'        => 1,
					'descripcion_1' => '',
					'descripcion_2' => '',
					'descripcion_3' => '',
				)
			]);
			Preguntas::create([
				array(
					'id_encuesta'   => 1,
					'estado'        => 1,
					'descripcion_1' => '',
					'descripcion_2' => '',
					'descripcion_3' => '',
				)
			]);
		}

	}