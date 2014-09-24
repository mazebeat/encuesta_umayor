<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateExcepcionesClientesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('excepciones_clientes', function(Blueprint $table)
		{
			$table->increments('id_excepciones_clientes')->unique();
			$table->integer('id_cliente');
			$table->integer('id_excepciones');
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
		Schema::drop('excepciones_clientes');
	}

}
