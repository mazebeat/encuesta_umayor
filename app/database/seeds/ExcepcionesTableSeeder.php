<?php

class ExcepcionesTableSeeder extends Seeder
{

	public function run()
	{
		Excepcion::create([
			'descripcion' => 'Usuario no desea responder encuesta',
		]);
	}

}