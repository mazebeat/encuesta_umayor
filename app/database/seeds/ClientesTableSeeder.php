<?php

	// Composer: "fzaninotto/faker": "v1.3.0"
	use Faker\Factory as Faker;

	class ClientesTableSeeder extends Seeder
	{

		public function run()
		{
			$faker = Faker::create();

			foreach(range(1, 17) as $index) {
				Cliente::create([
					'id_estado'            => 1,
					'id_negocio'           => 1,
					'bdd_umayor_id_alumno' => $index
				]);
			}
		}

	}