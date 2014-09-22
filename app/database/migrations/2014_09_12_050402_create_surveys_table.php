<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSurveysTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('surveys', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title');
			$table->mediumText('slogan');
			$table->longText('description');
			$table->tinyInteger('state');
			$table->integer('colorshemes_id');
			$table->foreign('survey_id')->references('id')->on('surveys');
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
		Schema::drop('survey');
	}

}
