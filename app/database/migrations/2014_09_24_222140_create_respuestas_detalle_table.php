<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRespuestasDetalleTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('respuestas_detalle', function (Blueprint $table) {
			$table->increments('id_respuesta_detalle');
			$table->string('valor');
			$table->integer('id_respuesta')->unsigned();
			$table->foreign('id_respuesta')->references('id_respuesta')->on('respuestas');
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
		Schema::drop('respuestas_detalle');
	}

}
