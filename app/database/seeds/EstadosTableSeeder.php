<?php

class EstadosTableSeeder extends Seeder
{

	public function run()
	{
		/**
		 * Activo
		 */
		Estado::create([
			'tipo'        => 'Activo',
			'descripcion' => 'Activo Negocio',
		]);
		Estado::create([
			'tipo'        => 'Activo',
			'descripcion' => 'Activo Cliente',
		]);
		Estado::create([
			'tipo'        => 'Activo',
			'descripcion' => 'Activo Encuesta',
		]);
		Estado::create([
			'tipo'        => 'Activo',
			'descripcion' => 'Activo Pregunta',
		]);
		Estado::create([
			'tipo'        => 'Activo',
			'descripcion' => 'Activo Pregunta Detalle',
		]);
		Estado::create([
			'tipo'        => 'Activo',
			'descripcion' => 'Activo Respuesta',
		]);
		/**
		 * Inactivos
		 */
		Estado::create([
			'tipo'        => 'Inactivo',
			'descripcion' => 'Inactivo Negocio',
		]);
		Estado::create([
			'tipo'        => 'Inactivo',
			'descripcion' => 'Inactivo Cliente',
		]);
		Estado::create([
			'tipo'        => 'Inactivo',
			'descripcion' => 'Inactivo Encuesta',
		]);
		Estado::create([
			'tipo'        => 'Inactivo',
			'descripcion' => 'Inactivo Pregunta',
		]);
		Estado::create([
			'tipo'        => 'Inactivo',
			'descripcion' => 'Inactivo Pregunta Detalle',
		]);
		Estado::create([
			'tipo'        => 'Inactivo',
			'descripcion' => 'Inactivo Respuesta',
		]);
		// OTROS
		Estado::create([
			'tipo'        => '1',
			'descripcion' => 'NO',
		]);
		Estado::create([
			'tipo'        => '2',
			'descripcion' => 'SI',
		]);
		Estado::create([
			'tipo'        => 'Activo',
			'descripcion' => 'Última respuesta mes activa',
		]);
		Estado::create([
			'tipo'        => 'Inactivo',
			'descripcion' => 'Respuestas anteriores',
		]);
	}

}