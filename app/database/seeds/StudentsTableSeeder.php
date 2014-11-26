<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class StudentsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();
        Student::create([
            'id' => 1,
            'employee_of_company_id' => 1,
            'position' => '차장',
            'employee_number' => '123456'
        ]);
	}

}

//
//$table->unsignedInteger('id');
//$table->foreign('id')->references('id')->on('users');
//$table->integer('employee_of_company_id')->unsigned();
//$table->foreign('employee_of_company_id')->references('id')->on('companies');
//$table->string('position');
//$table->string('employee_number')->nullable();