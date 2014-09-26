<?php

	// Composer: "fzaninotto/faker": "v1.3.0"
	use Faker\Factory as Faker;

	class ExcepcionesClienteTableSeeder extends Seeder
	{

		public function run()
		{
			$faker = Faker::create();

			foreach(range(6, 9) as $index) {
				ExcepcionesCliente::create([
					'fecha'        => $faker->dateTimeThisYear(),
					'id_cliente'   => $index,
					'id_excepcion' => 1,
				]);
			}
		}

	}