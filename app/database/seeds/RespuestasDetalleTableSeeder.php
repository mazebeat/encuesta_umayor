<?php

class RespuestasDetalleTableSeeder extends Seeder
{

	public function run()
	{
		RespuestasDetalle::create([
			'valor1'       => 5,
			'valor2'       => '',
			'id_respuesta' => 1
		]);
		RespuestasDetalle::create([
			'valor1'       => 0,
			'valor2'       => 'Porque....',
			'id_respuesta' => 2
		]);
		RespuestasDetalle::create([
			'valor1'       => 5,
			'valor2'       => '',
			'id_respuesta' => 3
		]);
		RespuestasDetalle::create([
			'valor1'       => 0,
			'valor2'       => 'Porque....',
			'id_respuesta' => 4
		]);
		RespuestasDetalle::create([
			'valor1'       => 5,
			'valor2'       => '',
			'id_respuesta' => 5
		]);
		RespuestasDetalle::create([
			'valor1'       => 0,
			'valor2'       => 'Porque....',
			'id_respuesta' => 6
		]);
	}

}