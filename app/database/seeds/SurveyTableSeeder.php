<?php

class SurveyTableSeeder extends Seeder
{

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index) {
			Encuesta::create(array(
				'title'			=> $faker->sentence,
				'slogan'			=> $faker->paragraph,
				'description'		=> $faker->text,
				'state'			=> true,
			));
		}
	}

}