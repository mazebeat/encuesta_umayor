<?php

	// Composer: "fzaninotto/faker": "v1.3.0"
	use Faker\Factory as Faker;

	class EncuestaTableSeeder extends Seeder
	{

		public function run()
		{
			$faker = Faker::create();

			foreach(range(1, 1) as $index) {
				Encuesta::create([
					'id_negocio'         => 1,
					'titulo'             => 'Encuesta de prueba',
					'estado'             => 1,
					'fecha_creacion'     => $faker->dateTime,
					'fecha_modificacion' => $faker->dateTime
				]);
			}
		}
	}