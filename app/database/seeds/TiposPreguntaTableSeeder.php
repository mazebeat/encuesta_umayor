<?php

	// Composer: "fzaninotto/faker": "v1.3.0"
	use Faker\Factory as Faker;

	class TiposPreguntaTableSeeder extends Seeder
	{

		public function run()
		{
			$faker = Faker::create();

			//			foreach(range(1, 10) as $index) {
			TiposPreguntum::create([
				'tipo' => 'Opcion única',
			]);
			TiposPreguntum::create([
				'tipo' => 'Opcion únicacon respuesta texto (Linea simple)',
				'opciones' => '{"chart_max"}'
			]);
			TiposPreguntum::create([
				'tipo' => 'Multiopcion',
			]);
			TiposPreguntum::create([
				'tipo' => 'Multiopcion con respuesta texto (Linea simple)',
				'opciones' => '{"chart_max"}'
			]);
			TiposPreguntum::create([
				'tipo' => 'Por rango de valor',
				'opciones' => '{"min","max"}'
			]);
			TiposPreguntum::create([
				'tipo' => 'Respuesta texto (Linea simple)',
				'opciones' => '{"chart_max"}'
			]);
			TiposPreguntum::create([
				'tipo' => 'Respuesta texto (Multilinea)',
				'opciones' => '{"chart_max","row"}'
			]);
			//			}
		}

	}