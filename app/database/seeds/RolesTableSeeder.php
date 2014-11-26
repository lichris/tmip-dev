<?php

class RolesTableSeeder extends Seeder {

    protected $role_name_array =[ 'Admin',
                                'Consultant',
                                'Student',
                                'Instructor',
                                'HR',
                                'Secretary',
                                'Executive', ];

	public function run()
	{
        foreach($this->role_name_array as $role_name) {
            Role::create([
                'role_name' => $role_name,
            ]);
        }
	}

}