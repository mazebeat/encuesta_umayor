<?php

use Faker\Factory as Faker;

class ExcepcionesClienteTableSeeder extends Seeder
{

	public function run()
	{
		$faker = Faker::create();

		ExcepcionesCliente::create([
			'fecha'        => $faker->dateTimeThisYear(),
			'id_cliente'   => 6,
			'id_excepcion' => 1,
		]);
	}

}