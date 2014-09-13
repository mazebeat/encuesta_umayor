<?php

class QuestionAnswerTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();
		$count1 = 1;
		$count2 = 1;
		foreach(range(1, 30) as $index)
		{
			QuestionAnswer::create([
				'answer_id' => $count1++,
				'question_id' => $count2++,
				]);

			if($count1 == 8) $count1 = 1;
			if($count2 == 15) $count2 = 1;
		}
	}

}