<?php
	/**
	 * Created by PhpStorm.
	 * User: Administrador
	 * Date: 24/09/2014
	 * Time: 22:07
	 */
	Schema::create('canales', function (Blueprint $table) {
		$table->increments('id_canal');
		$table->string('descripcion');
		$table->timestamps();
	});
	Schema::create('estados', function (Blueprint $table) {
		$table->increments('id_estado');
		$table->string('tipo');
		$table->string('descripcion')->nullable();
		$table->timestamps();
	});
	Schema::create('negocios', function (Blueprint $table) {
		$table->increments('id_negocio');
		$table->string('descripcion');
		$table->integer('id_estado')->unsigned();
		$table->foreign('id_estado')->references('id_estado')->on('estados');
		$table->timestamps();
	});
	Schema::create('bdd_umayor', function (Blueprint $table) {
		$table->increments('id_alumno');
		$table->string('facultad');
		$table->string('escuela');
		$table->string('carrera');
		$table->string('jornada');
		$table->string('dede');
		$table->string('campus');
		$table->string('rut', 11);
		$table->string('apellido_paterno');
		$table->string('apellido_materno');
		$table->string('nombres');
		$table->string('sexo');
		$table->dateTime('año_ingreso_1año_carrera');
		$table->dateTime('año_ingreso_carrera')->nullable();
		$table->dateTime('año_egreso_plan_regular')->nullable();
		$table->dateTime('fecha_registro');
		$table->integer('id_negocio')->unsigned();
		$table->foreign('id_negocio')->references('id_negocio')->on('negocios');
		$table->timestamps();
	});
	Schema::create('encuestas', function (Blueprint $table) {
		$table->increments('id_encuesta');
		$table->string('titulo');
		$table->datetime('fecha_creacion');
		$table->datetime('fecha_modificacion');
		$table->integer('id_estado')->unsigned();
		$table->foreign('id_estado')->references('id_estado')->on('estados');
		$table->integer('id_negocio')->unsigned();
		$table->foreign('id_negocio')->references('id_negocio')->on('negocios');
		$table->timestamps();
	});
	Schema::create('clientes', function (Blueprint $table) {
		$table->increments('id_cliente');
		$table->integer('id_estado')->unsigned();
		$table->foreign('id_estado')->references('id_estado')->on('estados');
		$table->integer('id_negocio')->unsigned();
		$table->foreign('id_negocio')->references('id_negocio')->on('negocios');
		$table->integer('bdd_umayor_id_alumno')->unsigned();
		$table->foreign('bdd_umayor_id_alumno')->references('id_alumno')->on('bdd_umayor');
		$table->timestamps();
	});
	Schema::create('excepciones', function (Blueprint $table) {
		$table->increments('id_excepcion');
		$table->string('descripcion');
		$table->integer('id_negocio')->unsigned();
		$table->foreign('id_negocio')->references('id_negocio')->on('negocios');
		$table->timestamps();
	});
	Schema::create('excepciones_cliente', function (Blueprint $table) {
		$table->increments('id_excepcion_cliente');
		$table->datetime('fecha');
		$table->integer('id_cliente')->unsigned();
		$table->foreign('id_cliente')->references('id_cliente')->on('clientes');
		$table->integer('id_excepcion')->unsigned();
		$table->foreign('id_excepcion')->references('id_excepcion')->on('excepciones');
		$table->timestamps();
	});
	Schema::create('preguntas', function (Blueprint $table) {
		$table->increments('id_pregunta');
		$table->string('descripcion_1');
		$table->string('descripcion_2')->nullable();
		$table->string('descripcion_3')->nullable();
		$table->string('numero');
		$table->integer('tipo');
		$table->integer('id_pregunta_padre')->nullable();
		$table->integer('id_estado')->unsigned();
		$table->foreign('id_estado')->references('id_estado')->on('estados');
		$table->integer('id_encuesta')->unsigned();
		$table->foreign('id_encuesta')->references('id_encuesta')->on('encuestas');
		$table->timestamps();
	});
	Schema::create('preguntas_detalle', function (Blueprint $table) {
		$table->increments('id_pregunta_detalle');
		$table->string('descripcion');
		$table->datetime('fecha_creacion');
		$table->datetime('fecha_modificacion');
		$table->integer('id_estado')->unsigned();
		$table->foreign('id_estado')->references('id_estado')->on('estados');
		$table->integer('id_encuesta')->unsigned();
		$table->foreign('id_encuesta')->references('id_encuesta')->on('encuestas');
		$table->integer('id_pregunta')->unsigned();
		$table->foreign('id_pregunta')->references('id_pregunta')->on('preguntas');
		$table->timestamps();
	});
	Schema::create('respuestas', function (Blueprint $table) {
		$table->increments('id_respuesta');
		$table->datetime('fecha');
		$table->integer('id_estado')->unsigned();
		$table->foreign('id_estado')->references('id_estado')->on('estados');
		$table->integer('id_canal')->unsigned();
		$table->foreign('id_canal')->references('id_canal')->on('canales');
		$table->integer('id_encuesta')->unsigned();
		$table->foreign('id_encuesta')->references('id_encuesta')->on('encuestas');
		$table->integer('id_pregunta')->unsigned();
		$table->foreign('id_pregunta')->references('id_pregunta')->on('preguntas');
		$table->integer('id_pregunta_detalle')->unsigned();
		$table->foreign('id_pregunta_detalle')->references('id_pregunta_detalle')->on('preguntas_detalle');
		$table->integer('id_cliente')->unsigned();
		$table->foreign('id_cliente')->references('id_cliente')->on('clientes');
		$table->timestamps();
	});
	Schema::create('respuestas_detalle', function (Blueprint $table) {
		$table->increments('id_respuesta_detalle');
		$table->string('valor');
		$table->integer('id_respuesta')->unsigned();
		$table->foreign('id_respuesta')->references('id_respuesta')->on('respuestas');
		$table->timestamps();
	});