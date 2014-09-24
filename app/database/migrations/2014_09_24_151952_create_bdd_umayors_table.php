<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBddUmayorsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('bdd_umayor', function(Blueprint $table)
		{
			$table->increments('id_alumno')->unique();
			$table->integer('id_negocio');
			$table->string('facultad');
			$table->string('escuela');
			$table->string('carrera');
			$table->string('jornada');
			$table->string('dede');
			$table->string('campus');
			$table->string('rut', 11);
			$table->string('apellido_paterno');
			$table->string('apellido_materno');
			$table->string('nombres');
			$table->string('sexo');
			$table->dateTime('año_ingreso_1año_carrera');
			$table->dateTime('año_ingreso_carrera');
			$table->dateTime('año_egreso_plan_regular');
			$table->dateTime('fecha_registro');
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
		Schema::drop('bdd_umayor');
	}

}
