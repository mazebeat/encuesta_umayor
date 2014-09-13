<?php

class UserTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 3) as $index)
		{
			User::create([
				'email' => $faker->email,
				'password' => $faker->word,
				]);
		}
	}

}