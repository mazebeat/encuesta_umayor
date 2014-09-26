<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class PreguntasDetalleTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			PreguntasDetalle::create([
				'descripcion' => $faker->sentence(6),
				'id_estado'   => '5',
				'id_encuesta' => '1',
				'id_pregunta' => '1',
				]);
		}
	}

}