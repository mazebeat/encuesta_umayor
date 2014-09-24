<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePreguntasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('preguntas', function(Blueprint $table)
		{
			$table->increments('id_pregunta')->unique();
			$table->string('descripcion_1');
			$table->string('descripcion_2');
			$table->string('descripcion_3');
			$table->string('numero_pregunta');
			$table->integer('tipo_pregunta');
			$table->integer('id_estado');
			$table->integer('id_encuesta');
			$table->integer('id_pregunta_padre');
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
		Schema::drop('preguntas');
	}

}
