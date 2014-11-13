<?php

use \Illuminate\Support\Facades\Crypt;

class StudentsTableSeeder extends Seeder {

	public function run()
	{

        Student::create([
            'user_id' => 6,
            'student_is_employee_of_company_id' => 1,
            'position' => '차장',
            'employee_number' => Crypt::encrypt('262061'),
        ]);
	}

}