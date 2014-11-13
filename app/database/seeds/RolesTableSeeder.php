<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class RolesTableSeeder extends Seeder {

	public function run()
	{
        Role::create([
            'role_name' => 'Administrator'
        ]);
        Role::create([
            'role_name' => 'Consultant'
        ]);
        Role::create([
            'role_name' => 'Student'
        ]);
        Role::create([
            'role_name' => 'Instructor'
        ]);
        Role::create([
            'role_name' => 'HR'
        ]);
        Role::create([
            'role_name' => 'Secretary'
        ]);
        Role::create([
            'role_name' => 'Executive'
        ]);
	}
}