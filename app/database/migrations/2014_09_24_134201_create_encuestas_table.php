<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEncuestasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('encuestas', function(Blueprint $table)
		{
			$table->increments('id_encuesta')->unique();
			$table->string('titulo');
			$table->integer('id_estado');
			$table->integer('id_negocio');
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
		Schema::drop('encuestas');
	}

}
