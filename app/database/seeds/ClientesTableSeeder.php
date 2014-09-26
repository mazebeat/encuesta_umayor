<?php

	// Composer: "fzaninotto/faker": "v1.3.0"
	use Faker\Factory as Faker;

	class ClientesTableSeeder extends Seeder
	{

		public function run()
		{
			$faker = Faker::create();

			foreach(range(1, 6) as $index) {
				Cliente::create([
					'id_estado'            => 1,
					// 'id_negocio'           => 1,
					'id_alumno' => $index
				]);
			}
		}

	}