<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateQuestionChoiceTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('question_choices', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('question_id')->unsigned();
			$table->integer('choice_id')->unsigned();
			$table->foreign('question_id')->references('id')->on('questions');
			$table->foreign('choice_id')->references('id')->on('choices');
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
		Schema::drop('question_choices');
	}

}
