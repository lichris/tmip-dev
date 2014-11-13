<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class ClassTypesTableSeeder extends Seeder {

	public function run()
	{
        ClassType::create([
            'class_type_name' => 'General Program'
        ]);
        ClassType::create([
            'class_type_name' => 'Executive Program'
        ]);
        ClassType::create([
            'class_type_name' => 'Sojourning Employee Program'
        ]);
        ClassType::create([
            'class_type_name' => 'Business Skills Program'
        ]);
        ClassType::create([
            'class_type_name' => 'Business Conversation Program'
        ]);
        ClassType::create([
            'class_type_name' => 'Job Program'
        ]);
	}

}