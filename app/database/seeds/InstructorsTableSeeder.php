<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class InstructorsTableSeeder extends Seeder {

	public function run()
	{
        $role_id = Role::where('role_name', '=', 'Instructor')->firstOrFail()->id;
        $instructors = User::where('role_id', '=', $role_id)->get();
        foreach($instructors as $instructor)
        {
            Instructor::create([
                'id' => $instructor->id,
                'user_name_chn' => '宋真'.$instructor->id,
                'date_of_birth' => '19850625',
                'bank_name' => '신한은행',
                'bank_account_number' => Crypt::encrypt('110322651638'),
                'specialized_on_course_type_id' => rand(1, 19),
            ]);
        }
	}

}