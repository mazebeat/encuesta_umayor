<?php

class ClientesTableSeeder extends Seeder
{

	public function run()
	{
		foreach(range(1, 6) as $index) {
			Cliente::create([
				'id_estado' => 2,
				'id_alumno' => $index
			]);
		}
	}

}