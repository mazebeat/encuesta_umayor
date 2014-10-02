<?php

class EncuestasTableSeeder extends Seeder
{

	public function run()
	{
		foreach(range(1, 1) as $index) {
			Encuesta::create([
				'titulo'         => 'Encuesta Institución',
				'id_estado'      => 3,
				'fecha_creacion' => Carbon::now()
			]);
		}
	}
}