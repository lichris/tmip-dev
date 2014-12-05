<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class InstructorsTableSeeder extends Seeder {

	public function run()
	{

        $number_of_users = User::all()->count();
        $count = $number_of_users + 1;
        $instructor_role = Role::where('name', '=', 'Instructor')->firstOrFail();
        $instructor_role_id = $instructor_role->id;
        $number_of_instructor = Instructor::all()->count();
        $next_number_of_instructor = $number_of_instructor + 1;
        $max_count = $number_of_users + 20;
        $genders = [ 'M', 'W' ];
        $number_of_banks = Bank::all()->count();
        for (; $count <= $max_count; $count++, $next_number_of_instructor++) {
            $user_id = User::create([
                'account_email' => 'inst'.$next_number_of_instructor.'@asdf.net',
                'password' => \Hash::make('asdf'),
                'role_id' => $instructor_role_id,
                'name_kor' => '교수 테스트'.$next_number_of_instructor,
                'name_eng' => 'Test Instructor'.$next_number_of_instructor,
                'private_email' => 'inst_asdf'.$next_number_of_instructor.'@asdf.net',
                'phone_number' => rand(10000000000, 99999999999),
                'gender' => $genders[rand(0, 1)],
                'age' => rand(20, 45),
            ])->id;

            Instructor::create([
                'user_id' => $user_id,
                'name_chn' => '宋真'.$next_number_of_instructor,
                'date_of_birth' => Crypt::encrypt('19850625'),
                'residence_number' => Crypt::encrypt('1234567'),
                'bank_id' => rand(1, $number_of_banks),
                'bank_account_number' => Crypt::encrypt('110322651638'),
            ]);
        }
	}
}