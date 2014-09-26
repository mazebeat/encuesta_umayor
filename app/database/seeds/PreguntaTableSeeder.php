<?php

	// Composer: "fzaninotto/faker": "v1.3.0"
	use Faker\Factory as Faker;

	class PreguntaTableSeeder extends Seeder
	{

		public function run()
		{
			$faker = Faker::create();

			//		foreach(range(1, 10) as $index)
			//		{
			//			Pregunta::create([
			//			]);
			//		}
			Pregunta::create([
					'descripcion_1'     => 'Con nota de 1 a 7, donde 1 es muy malo y 7 es muy bueno, ¿Hasta qué punto la marca Universidad Mayor ha logrado satisfacer sus necesidades en forma efectiva?',
					'descripcion_2'     => '',
					'descripcion_3'     => '',
					'numero_pregunta'   => '1',
					'id_pregunta_padre' => 0,
					'id_tipo_respuesta' => 5,
					'id_estado'         => 4,
					'id_encuesta'       => 1,
			]);
			Pregunta::create([
					'descripcion_1'     => '¿Por qué evalúa con esa nota?',
					'descripcion_2'     => '',
					'descripcion_3'     => '',
					'numero_pregunta'   => '',
					'id_pregunta_padre' => 1,
					'id_tipo_respuesta' => 7,
					'id_estado'         => 4,
					'id_encuesta'       => 1,
			]);
			Pregunta::create([
					'descripcion_1'     => 'Con nota de 1 a 7, donde 1 es muy malo y 7 es muy bueno, ¿Qué tan simple y fácil le ha sido interactuar con Universidad Mayor?',
					'descripcion_2'     => '',
					'descripcion_3'     => '',
					'numero_pregunta'   => '2',
					'id_pregunta_padre' => 0,
					'id_tipo_respuesta' => 5,
					'id_estado'         => 4,
					'id_encuesta'       => 1,
			]);
			Pregunta::create([
					'descripcion_1'     => '¿Por qué evalúa con esa nota?',
					'descripcion_2'     => '',
					'descripcion_3'     => '',
					'numero_pregunta'   => '',
					'id_pregunta_padre' => 3,
					'id_tipo_respuesta' => 7,
					'id_estado'         => 4,
					'id_encuesta'       => 1,
			]);
			Pregunta::create([
					'descripcion_1'     => 'Con nota de 1 a 7, donde 1 es muy malo y 7 es muy bueno, ¿Qué tan agradable ha sido su permanencia en la Universidad Mayor?',
					'descripcion_2'     => '',
					'descripcion_3'     => '',
					'numero_pregunta'   => '3',
					'id_pregunta_padre' => 0,
					'id_tipo_respuesta' => 5,
					'id_estado'         => 4,
					'id_encuesta'       => 1
			]);
			Pregunta::create([
					'descripcion_1'     => '¿Por qué evalúa con esa nota?',
					'descripcion_2'     => '',
					'descripcion_3'     => '',
					'numero_pregunta'   => '',
					'id_pregunta_padre' => 6,
					'id_tipo_respuesta' => 7,
					'id_estado'         => 4,
					'id_encuesta'       => 1,
			]);
			Pregunta::create([
					'descripcion_1'     => '¿Recomendaría Universidad Mayor a sus conocidos o amigos?',
					'descripcion_2'     => '',
					'descripcion_3'     => '',
					'numero_pregunta'   => '4',
					'id_pregunta_padre' => 0,
					'id_tipo_respuesta' => 1,
					'id_estado'         => 4,
					'id_encuesta'       => 1,
			]);
		}

	}