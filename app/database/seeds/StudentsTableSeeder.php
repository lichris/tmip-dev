<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class StudentsTableSeeder extends Seeder {

	public function run()
	{
        $count = User::all()->count();
        $max_count = $count + 20;
        $count += 1;
        $student_role = Role::where('name', '=', 'Student')->firstOrFail();
        $student_role_id = $student_role->id;
        $students = $student_role->usersByRole;
        $number_of_students = $students->count();
        $next_number_of_students = $number_of_students + 1;
        $genders = [ 'M', 'W' ];
        $positions = [ '사원', '대리', '과장', '차장', '부장' ];
        $number_of_companies = Company::all()->count();
        for (; $count <= $max_count; $count++, $next_number_of_students++) {
            $user_id = User::create([
                'account_email' => 'stud'.$next_number_of_students.'@asdf.net',
                'password' => \Hash::make('asdf'),
                'role_id' => $student_role_id,
                'name_kor' => '학생 테스트'.$next_number_of_students,
                'name_eng' => 'Test Student'.$next_number_of_students,
                'private_email' => 'stud_asdf'.$next_number_of_students.'@asdf.net',
                'phone_number' => rand(10000000000, 99999999999),
                'gender' => $genders[rand(0, 1)],
                'age' => rand(20, 45),
            ])->id;
            Student::create([
                'user_id' => $user_id,
                'company_id' => rand(1, $number_of_companies),
                'position' => $positions[rand(0, 4)],
                'deputy' => 'Some Deputy'
            ]);
        }
	}
}