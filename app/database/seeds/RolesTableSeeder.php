<?php

class RolesTableSeeder extends Seeder {

    protected $name_array =[ 'Admin',
                                'Consultant',
                                'Student',
                                'Instructor',
                                'HR',
                                'Secretary',
                                'Executive', ];

	public function run()
	{
        foreach($this->name_array as $name) {
            Role::create([
                'name' => $name,
            ]);
        }
	}

}