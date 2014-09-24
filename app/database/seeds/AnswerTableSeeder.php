<?php

class AnswerTableSeeder extends Seeder
{

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 8) as $index) {
			Respuesta::create(array(
				'text' => $faker->word,
			));
		}
	}

}