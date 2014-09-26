<?php

	// Composer: "fzaninotto/faker": "v1.3.0"
	use Faker\Factory as Faker;

	class ExcepcionesTableSeeder extends Seeder
	{

		public function run()
		{
			$faker = Faker::create();

			//		foreach(range(1, 10) as $index)
			//		{
			Excepcion::create([
				'descripcion' => 'No desea responder encuesta',
				// 'id_negocio'  => 1,
			]);
			//		}
		}

	}