<?php

	// Composer: "fzaninotto/faker": "v1.3.0"
	use Faker\Factory as Faker;

	class TiposRespuestaTableSeeder extends Seeder
	{

		public function run()
		{
			$faker = Faker::create();

			//			foreach(range(1, 10) as $index) {
			TiposRespuesta::create([
				'tipo' => 'Opcion única',
			]);
			TiposRespuesta::create([
				'tipo' => 'Opcion únicacon respuesta texto (Linea simple)',
				'opciones' => '{"chart_max"}'
			]);
			TiposRespuesta::create([
				'tipo' => 'Multiopcion',
			]);
			TiposRespuesta::create([
				'tipo' => 'Multiopcion con respuesta texto (Linea simple)',
				'opciones' => '{"chart_max"}'
			]);
			TiposRespuesta::create([
				'tipo' => 'Por rango de valor',
				'opciones' => '{"min","max"}'
			]);
			TiposRespuesta::create([
				'tipo' => 'Respuesta texto (Linea simple)',
				'opciones' => '{"chart_max"}'
			]);
			TiposRespuesta::create([
				'tipo' => 'Respuesta texto (Multilinea)',
				'opciones' => '{"chart_max","row"}'
			]);
			//			}
		}

	}