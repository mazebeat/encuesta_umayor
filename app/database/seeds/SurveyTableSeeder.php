<?php

class SurveyTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			Survey::create([
                        'title' => $faker->sentence,
                        'slogan' => $faker->paragraph,
			]);
		}
	}

}