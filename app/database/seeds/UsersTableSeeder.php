<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder {

	public function run()
    {
        $count = 1;
        $faker = Faker::create();
        $role_id = Role::where('role_name', '=', 'Student')->firstOrFail()->id;
        foreach(range(1, 20) as $index)
        {
            User::create([
                'role_id' => $role_id,
                'user_name_kor' => '학습자'.$count,
                'user_name_eng' => 'Test Student',
                'user_email' => 'test_'.$count.'@test_stud.com',
                'private_email' => $faker->email,
                'phone_number' => $faker->phoneNumber,
                'password' => \Hash::make('1234'),
                'gender' => 'M',
                'age' => 33,
            ]);
            $count++;
        }
        $role_id = Role::where('role_name', '=', 'Instructor')->firstOrFail()->id;
        foreach(range(1, 20) as $index)
        {
            User::create([
                'role_id' => $role_id,
                'user_name_kor' => '교수진'.$count,
                'user_name_eng' => 'Test Instructor',
                'user_email' => 'test_'.$count.'@test_inst.com',
                'private_email' => $faker->email,
                'phone_number' => $faker->phoneNumber,
                'password' => \Hash::make('1234'),
                'gender' => 'M',
                'age' => 33,
            ]);
            $count++;
        }
        $role_id = Role::where('role_name', '=', 'HR')->firstOrFail()->id;
        foreach(range(1, 20) as $index)
        {
            User::create([
                'role_id' => $role_id,
                'user_name_kor' => 'HR'.$count,
                'user_name_eng' => 'Test HR',
                'user_email' => 'test_'.$count.'@test_hr.com',
                'private_email' => $faker->email,
                'phone_number' => $faker->phoneNumber,
                'password' => \Hash::make('1234'),
                'gender' => 'M',
                'age' => 33,
            ]);
            $count++;
        }
	}

}



//$table->increments('id');
//$table->integer('role_id')->unsigned();
//$table->foreign('role_id')->references('id')->on('roles');
//$table->string('user_name_kor');
//$table->string('user_name_eng');
//$table->string('user_email')->unique();
//$table->string('private_email')->unique();
//$table->string('phone_number');
//$table->string('password');
//$table->char('gender', 1)->nullable();
//$table->tinyInteger('age')->nullable();
//$table->rememberToken();
//$table->timestamps();