<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class StudentsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			Student::create([

				'student_name' => 'test_student1',
				'password' => Hash::make('test1234'),
				'email' => 'test_student1@email.com',
				'phone_number' => '010-1111-2222',
				'role_name' => 'student'

			]);
		}
	}

}