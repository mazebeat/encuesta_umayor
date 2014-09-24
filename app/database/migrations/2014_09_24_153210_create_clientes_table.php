<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateClientesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('clientes', function(Blueprint $table)
		{
			$table->increments('id_cliente')->unique();
			$table->integer('id_estado');
			$table->integer('id_negocio');
			$table->integer('bdd_umayor_id_alumno');
			$table->string('excepciones_clientes_clientes_id_negocio');
			$table->string('excepciones_clientes_clientes_id_clientes');
			$table->string('excepciones_clientes_clientes_dbb_umayor_id_alumno');
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
		Schema::drop('clientes');
	}

}
