<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCompanies extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('companies', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('company_name_kor')->unique();
            $table->string('company_name_eng')->nullable();
            $table->string('address_kor');
            $table->string('address_eng')->nullable();
            $table->string('contact_email')->nullable();
            $table->string('contact_number_1');
            $table->string('contact_number_2')->nullable();
            $table->string('list_of_hr_ids_in_charge_of')->nullable();
            $table->string('logo_img_filename')->nullable();
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('companies');
	}

}
