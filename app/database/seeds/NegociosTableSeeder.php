<?php

class NegociosTableSeeder extends Seeder
{

	public function run()
	{
		foreach(range(1, 1) as $index) {
			Negocio::create([
				'descripcion' => 'Universidad Mayor',
				'id_estado'   => 1
			]);
		}
	}

}