<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRespuestasDetallesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('respuestas_detalles', function(Blueprint $table)
		{
			$table->increments('id_respuesta_detalle')->unique();
			$table->string('valor_respuesta');
			$table->integer('id_respuesta');
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
		Schema::drop('respuestas_detalles');
	}

}
