'text' => $faker->word,<?php

class QuestionTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 15) as $index)
		{
			Question::create([
				'text' => $faker->sentence,
				'state' => 1,
				]);
		}
	}

}