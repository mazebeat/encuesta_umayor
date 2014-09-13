<?php

class UserAnswerTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();
		$count1 = 1;
		$count2 = 1;
		$count3 = 0;
		foreach(range(1, 60) as $index)
		{
			UserAnswer::create([
				'user_id' => $count1++,
				'question_answer_id' => $count2++,
				'state' => $count3,
				]);
			if($count1 == 3) $count1 = 1;
			if($count2 == 31) $count2 = 1;
			if($count2 == 16) $count3 = 1;
		}
	}

}