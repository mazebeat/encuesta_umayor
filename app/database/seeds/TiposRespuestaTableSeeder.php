<?php

class TiposRespuestaTableSeeder extends Seeder
{

	public function run()
	{
		TiposRespuesta::create([
			'tipo' => 'Opcion única',
		]);
		TiposRespuesta::create([
			'tipo'     => 'Opcion únicacon respuesta texto (Linea simple)',
			'opciones' => '{"chart_max"}'
		]);
		TiposRespuesta::create([
			'tipo' => 'Multiopcion',
		]);
		TiposRespuesta::create([
			'tipo'     => 'Multiopcion con respuesta texto (Linea simple)',
			'opciones' => '{"chart_max"}'
		]);
		TiposRespuesta::create([
			'tipo'     => 'Por rango de valor',
			'opciones' => '{"min","max"}'
		]);
		TiposRespuesta::create([
			'tipo'     => 'Respuesta texto (Linea simple)',
			'opciones' => '{"chart_max"}'
		]);
		TiposRespuesta::create([
			'tipo'     => 'Respuesta texto (Multilinea)',
			'opciones' => '{"chart_max","row"}'
		]);
	}
}