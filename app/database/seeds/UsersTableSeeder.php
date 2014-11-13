<?php


class UsersTableSeeder extends Seeder {

	public function run()
	{
        User::create([
            'user_name_kor' => '이희승',
            'user_name_eng' => 'Heeseung Lee',
            'user_email' => "final.lee@thecorporation.co.kr",
            'password' => \Hash::make('doit140519'),
            'user_has_permission_of_role_id' => 1,
            'private_email' => '1541.hsl@gmail.com',
            'gender' => 'M',
            'age' => 30,
            'phone_number' => '01063651638'
        ]);
        User::create([
            'user_name_kor' => '서한울',
            'user_name_eng' => 'Hanwool Suh',
            'user_email' => "han.w.suh@thecorporation.co.kr",
            'password' => \Hash::make('doit140519'),
            'user_has_permission_of_role_id' => 1,
            'private_email' => 'han.w.suh@gmail.com',
            'gender' => 'M',
            'age' => 30,
            'phone_number' => '01053229318'
        ]);
        User::create([
            'user_name_kor' => '조성훈',
            'user_name_eng' => 'Sunghoon Jo',
            'user_email' => "sh.jo@thecorporation.co.kr",
            'password' => \Hash::make('doit140519'),
            'user_has_permission_of_role_id' => 1,
            'private_email' => 'kylejo86@gmail.com',
            'gender' => 'M',
            'age' => 29,
            'phone_number' => '01071109949'
        ]);
        User::create([
            'user_name_kor' => '송진',
            'user_name_eng' => 'Gin Song',
            'user_email' => "gin.song@thecorporation.co.kr",
            'password' => \Hash::make('doit140519'),
            'user_has_permission_of_role_id' => 1,
            'private_email' => 'sjgaru@gmail.com',
            'gender' => 'M',
            'age' => 30,
            'phone_number' => '01042324278'
        ]);

        User::create([
            'user_name_kor' => '김소은',
            'user_name_eng' => 'Soeun Kim',
            'user_email' => "ssony82@thecorporation.co.kr",
            'password' => \Hash::make('doit140519'),
            'user_has_permission_of_role_id' => 2,
            'private_email' => 'soeun@thegmail.com',
            'gender' => 'F',
            'age' => 32,
            'phone_number' => '01068724278'
        ]);
        User::create([
            'user_name_kor' => '추성훈',
            'user_name_eng' => 'Sunghoon Choo',
            'user_email' => "sh.choo@thecorporation.co.kr",
            'password' => \Hash::make('doit140519'),
            'user_has_permission_of_role_id' => 3,
            'private_email' => 'sh.choo@gmail.com',
            'gender' => 'M',
            'age' => 37,
            'phone_number' => '01045459318'
        ]);
        User::create([
            'user_name_kor' => '왕서방',
            'user_name_eng' => 'Seobang Wang',
            'user_email' => "king.seobang@thecorporation.co.kr",
            'password' => \Hash::make('doit140519'),
            'user_has_permission_of_role_id' => 4,
            'private_email' => 'king.seobang@gmail.com',
            'gender' => 'M',
            'age' => 38,
            'phone_number' => '01069698585'
        ]);
        User::create([
            'user_name_kor' => '김태희',
            'user_name_eng' => 'Taehee Kim',
            'user_email' => "th.kim@thecorporation.co.kr",
            'password' => \Hash::make('doit140519'),
            'user_has_permission_of_role_id' => 5,
            'private_email' => 'th.kim@thegmail.com',
            'gender' => 'F',
            'age' => 32,
            'phone_number' => '01011112222'
        ]);
        User::create([
            'user_name_kor' => '혜리',
            'user_name_eng' => 'Herry',
            'user_email' => "herry@thecorporation.co.kr",
            'password' => \Hash::make('doit140519'),
            'user_has_permission_of_role_id' => 6,
            'private_email' => 'herry@gmail.com',
            'gender' => 'F',
            'age' => 21,
            'phone_number' => '01033334444'
        ]);
        User::create([
            'user_name_kor' => '유인나',
            'user_name_eng' => 'Inna Yoo',
            'user_email' => "inna.yoo@thecorporation.co.kr",
            'password' => \Hash::make('doit140519'),
            'user_has_permission_of_role_id' => 7,
            'private_email' => 'inna.yoo@gmail.com',
            'gender' => 'F',
            'age' => 30,
            'phone_number' => '01055556666'
        ]);
	}

}