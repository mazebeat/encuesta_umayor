<?php

	// Composer: "fzaninotto/faker": "v1.3.0"
	use Faker\Factory as Faker;

	class EncuestasTableSeeder extends Seeder
	{

		public function run()
		{
			$faker = Faker::create();

			foreach(range(1, 1) as $index) {
				Encuesta::create([
					'id_negocio'         => 1,
					'titulo'             => 'Encuesta Institución',
					'estado'             => 1,
					'fecha_creacion'     => $faker->dateTime,
					'fecha_modificacion' => $faker->dateTime
				]);
			}
		}
	}