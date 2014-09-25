<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBddUmayorTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('bdd_umayor', function (Blueprint $table) {
			$table->increments('id_alumno');
			$table->string('facultad');
			$table->string('escuela');
			$table->string('carrera');
			$table->string('jornada');
			$table->string('sede');
			$table->string('campus');
			$table->string('rut', 11);
			$table->string('apellido_paterno');
			$table->string('apellido_materno');
			$table->string('nombres');
			$table->string('sexo');
			$table->dateTime('año_ingreso_1año_carrera');
			$table->dateTime('año_ingreso_carrera')->nullable();
			$table->dateTime('año_egreso_plan_regular')->nullable();
			$table->dateTime('fecha_registro');
			$table->integer('id_negocio')->unsigned();
			$table->foreign('id_negocio')->references('id_negocio')->on('negocios');
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
