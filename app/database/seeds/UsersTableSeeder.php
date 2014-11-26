<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder {

	public function run()
    {
        $faker = Faker::create();
        User::create([
            'role_id' => 3,
            'user_name_kor' => '추성훈',
            'user_name_eng' => 'Choo Sunghoon',
            'user_email' => $faker->companyEmail,
            'private_email' => $faker->email,
            'phone_number' => $faker->phoneNumber,
            'password' => \Hash::make('1234'),
            'gender' => 'M',
            'age' => 33,
        ]);
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