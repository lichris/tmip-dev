<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsToCompaniesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('companies', function(Blueprint $table)
		{
			// adding columns to the companies table
            $table->string('address_kor')->nullable();

            $table->string('address_eng')->nullable();

            $table->string('contact_email', 50)->nullable();

            $table->string('contact_number_1', 15)->nullable();

            $table->string('contact_number_2', 15)->nullable();

            $table->string('lists_of_the_hrs_in_charge')->nullable();

            $table->string('logo_image_location')->nullable();

            $table->unique('company_name');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('companies', function(Blueprint $table)
		{
			// dropping all changes
            $table->dropColumn('address_kor');

            $table->dropColumn('address_eng');

            $table->dropColumn('contact_email', 50);

            $table->dropColumn('contact_number_1', 15);

            $table->dropColumn('contact_number_2', 15);

            $table->dropColumn('lists_of_the_hrs_in_charge');

            $table->dropColumn('logo_image_location');

            $table->dropUnique('company_name');
		});
	}

}
