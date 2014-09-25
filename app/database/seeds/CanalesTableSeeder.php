<?php

	// Composer: "fzaninotto/faker": "v1.3.0"
	use Faker\Factory as Faker;

	class CanalesTableSeeder extends Seeder
	{

		public function run()
		{
			$faker = Faker::create();
			//			foreach(range(1, 10) as $index) {
			Canal::create([
				'codigo'      => 'em',
				'descripcion' => 'Emails'
			]);
			Canal::create([
				'codigo'      => 'fa',
				'descripcion' => 'Facebook'
			]);
			Canal::create([
				'codigo'      => 'ba',
				'descripcion' => 'Banner portal estudiantil'
			]);
			Canal::create([
				'codigo'      => 'ap',
				'descripcion' => 'APP InfoUMayor'
			]);
			Canal::create([
				'codigo'      => 'ca',
				'descripcion' => 'Call center'
			]);
			Canal::create([
				'codigo'      => 'ce',
				'descripcion' => 'Centros de atención presencial'
			]);
			//			}
		}

	}