<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateExcepcionesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('excepciones', function (Blueprint $table) {
			$table->increments('id_excepcion')->unique();
			$table->string('descripcion');
			$table->integer('id_negocio')->unsigned();
			$table->foreign('id_negocio')->references('id_negocio')->on('negocios')->onDelete('cascade')->onUpdate('cascade');
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
		Schema::drop('excepciones');
	}

}
