<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateQuestionAnswerTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('question_answer', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('answer_id')->unsigned();
			$table->integer('question_id')->unsigned();
			$table->foreign('answer_id')->references('id')->on('answer');
			$table->foreign('question_id')->references('id')->on('question');
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
		Schema::drop('question_answer');
	}

}
