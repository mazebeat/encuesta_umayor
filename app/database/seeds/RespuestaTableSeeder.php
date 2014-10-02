<?php

class RespuestaTableSeeder extends Seeder
{

	public function run()
	{
		Respuesta::create([
			'id_estado'           => 6,
			'id_canal'            => 1,
			'id_encuesta'         => 1,
			'id_pregunta'         => 1,
			'id_pregunta_detalle' => 1,
			'id_cliente'          => 1,
		]);
		Respuesta::create([
			'id_estado'           => 6,
			'id_canal'            => 1,
			'id_encuesta'         => 1,
			'id_pregunta'         => 2,
			'id_pregunta_detalle' => 2,
			'id_cliente'          => 1,
		]);
		Respuesta::create([
			'id_estado'           => 6,
			'id_canal'            => 1,
			'id_encuesta'         => 1,
			'id_pregunta'         => 3,
			'id_pregunta_detalle' => 3,
			'id_cliente'          => 1,
		]);
		Respuesta::create([
			'id_estado'           => 6,
			'id_canal'            => 1,
			'id_encuesta'         => 1,
			'id_pregunta'         => 4,
			'id_pregunta_detalle' => 4,
			'id_cliente'          => 1,
		]);

		Respuesta::create([
			'id_estado'           => 6,
			'id_canal'            => 3,
			'id_encuesta'         => 1,
			'id_pregunta'         => 1,
			'id_pregunta_detalle' => 1,
			'id_cliente'          => 2,
		]);
		Respuesta::create([
			'id_estado'           => 6,
			'id_canal'            => 3,
			'id_encuesta'         => 1,
			'id_pregunta'         => 2,
			'id_pregunta_detalle' => 2,
			'id_cliente'          => 2,
		]);
		Respuesta::create([
			'id_estado'           => 6,
			'id_canal'            => 3,
			'id_encuesta'         => 1,
			'id_pregunta'         => 3,
			'id_pregunta_detalle' => 3,
			'id_cliente'          => 2,
		]);
		Respuesta::create([
			'id_estado'           => 6,
			'id_canal'            => 3,
			'id_encuesta'         => 1,
			'id_pregunta'         => 4,
			'id_pregunta_detalle' => 4,
			'id_cliente'          => 2,
		]);
	}
}