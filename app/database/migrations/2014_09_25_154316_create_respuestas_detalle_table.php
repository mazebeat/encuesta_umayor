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
			$table->increments('id_respuesta_detalle')->unique();
			$table->string('valor1')->nullable();
			$table->integer('valor2')->nullable();
			$table->integer('id_respuesta')->unsigned();
			$table->foreign('id_respuesta')->references('id_respuesta')->on('respuestas')->onDelete('cascade')->onUpdate('cascade');
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
