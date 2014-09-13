<?php

class AnswerTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 8) as $index)
		{
			Answer::create([
                    	'text' => $faker->word,
			]);
		}
	}

}