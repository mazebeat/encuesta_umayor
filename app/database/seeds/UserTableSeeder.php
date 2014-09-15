<?php

class UserTableSeeder extends Seeder
{

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 3) as $index) {
			User::create(array(
				'username' => $faker->userName,
				'email' => $faker->email,
				'password' => $faker->word,
			));
		}
	}

}