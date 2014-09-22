<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateColorschemeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('colorscheme', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('header_background');
			$table->string('header_color');
			$table->string('header_font');
			$table->tinyInteger('header_size');
			$table->string('content_background');
			$table->string('content_color');
			$table->string('content_font');
			$table->tinyInteger('content_size');
			$table->string('title_background');
			$table->string('title_color');
			$table->string('title_font');
			$table->tinyInteger('title_size');
			$table->string('question_background');
			$table->string('question_color');
			$table->string('question_font');
			$table->tinyInteger('question_size');
			$table->string('choice_background');
			$table->string('choice_color');
			$table->string('choice_font');
			$table->tinyInteger('choice_size');
			$table->string('footer_background');
			$table->string('footer_color');
			$table->string('footer_font');
			$table->tinyInteger('footer_size');
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
		Schema::drop('colorscheme');
	}

}
