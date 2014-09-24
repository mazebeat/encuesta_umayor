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
		Schema::create('respuestas', function(Blueprint $table)
		{
			$table->increments('id_respuestas')->unique();
			$table->integer('id_estado');
			$table->integer('id_encuesta');
			$table->integer('id_pregunta');
			$table->integer('id_pregunta_detalle');
			$table->integer('id_cliente');
			$table->integer('id_canal');
			$table->datetime('fecha'); 
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
