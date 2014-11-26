<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class CompaniesTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
            $temp = $faker->userName;
            $kor = $temp."_kor";
            $eng = $temp."_eng";
			Company::create([
                'company_name_kor' => $kor,
                'company_name_eng' => $eng,
                'address_kor' => $faker->address,
                'address_eng' => $faker->address,
                'contact_email' => $faker->companyEmail,
                'contact_number_1' => $faker->phoneNumber,
			]);
		}
	}

}

//
//$table->increments('id');
//$table->string('company_name_kor')->unique();
//$table->string('company_name_eng')->nullable();
//$table->string('address_kor');
//$table->string('address_eng')->nullable();
//$table->string('contact_email')->nullable();
//$table->string('contact_number_1');
//$table->string('contact_number_2')->nullable();
//$table->string('list_of_hr_ids_in_charge_of')->nullable();
//$table->string('logo_img_filename')->nullable();
//$table->timestamps();