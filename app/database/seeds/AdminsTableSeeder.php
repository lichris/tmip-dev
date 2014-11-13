<?php

class AdminsTableSeeder extends Seeder {

	public function run()
	{
        Admin::create([
            'user_id' => 1,
        ]);
        Admin::create([
            'user_id' => 2,
        ]);
        Admin::create([
            'user_id' => 3,
        ]);
        Admin::create([
            'user_id' => 4,
        ]);
	}

}