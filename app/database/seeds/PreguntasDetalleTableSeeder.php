<?php

class PreguntasDetalleTableSeeder extends Seeder
{

	public function run()
	{
		foreach(range(1, 7) as $index) {
			PreguntasDetalle::create([
				'descripcion' => Pregunta::whereIdPregunta($index)->first(array('descripcion_1')),
				'id_estado'   => 5,
				'id_encuesta' => 1,
				'id_pregunta' => $index,
			]);
		}
	}

}