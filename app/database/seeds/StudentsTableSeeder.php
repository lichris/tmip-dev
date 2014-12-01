<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class StudentsTableSeeder extends Seeder {

	public function run()
	{
        $role_id = Role::where('role_name', '=', 'Student')->firstOrFail()->id;
        $students = User::where('role_id', '=', $role_id)->get();
        foreach($students as $student)
        {
            Student::create([
                'id' => $student->id,
                'employee_of_company_id' => rand(1, 10),
                'position' => '차장',
                'employee_number' => '123456'
            ]);
        }
	}

}