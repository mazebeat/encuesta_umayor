<?php

	class NegociosTableSeeder extends Seeder
	{

		public function run()
		{
			$faker = Faker::create();

			foreach(range(1, 1) as $index) {
				Negocio::create([
					'Descripcion' => 'Universidad Mayor',
					'Estado'      => 1
				]);
			}
		}

	}