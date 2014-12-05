<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('RolesTableSeeder');
        $this->call('CourseTypesTableSeeder');
        $this->call('UsersTableSeeder');
        $this->call('CompaniesTableSeeder');
        for ($i = 0; $i < 25; $i++) {
            $this->call('StudentsTableSeeder');
        }
        $this->call('BanksTableSeeder');
        for ($i = 0; $i < 10; $i++) {
            $this->call('InstructorsTableSeeder');
        }
        $this->call('CoursesTableSeeder');
//        $this->call('CourseTypesTableSeeder');
//        $this->call('CourseTypesTableSeeder');
//        $this->call('CourseTypesTableSeeder');
	}

}
