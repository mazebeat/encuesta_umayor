'text' => $faker->word,<?php

class QuestionTableSeeder extends Seeder
{

	public function run()
	{
		$faker = Faker::create();
		$count = 1;
		foreach(range(1, 15) as $index) {
			Question::create(array(
				'text' => $faker->sentence,
				'state' => 1,
				'survey_id' => $count,
			));
			if($index == 7)
				$count++;
		}
	}

}