<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRespuestasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('respuestas', function (Blueprint $table) {
			$table->increments('id_respuesta')->unique();
			$table->datetime('fecha')->default('1900-01-01 00:00:00');
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
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('respuestas');
	}

}
