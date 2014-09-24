<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePreguntasDetallesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('preguntas_detalles', function(Blueprint $table)
		{
			$table->increments('id_pregunta_detalle')->unique();
			$table->string('descripcion');
			$table->integer('id_estado');
			$table->integer('id_encuesta');
			$table->integer('id_pregunta');
			$table->datetime('fecha_creacion');
			$table->datetime('fecha_modificacion');
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
		Schema::drop('preguntas_detalles');
	}

}
