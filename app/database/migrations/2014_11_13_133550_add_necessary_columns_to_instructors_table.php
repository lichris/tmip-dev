<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddNecessaryColumnsToInstructorsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('instructors', function(Blueprint $table)
		{
			// adding necessary columns to instructors table
            $table->string('user_name_chn', 45);

            $table->string('resident_registration_number_first_part', 6);

            $table->string('resident_registration_number_last_part', 100);

            $table->string('address')->nullable();

            $table->string('bank_account_number', 100);

            $table->tinyInteger('payday');

            $table->integer('instructor_is_specialized_on_class_type_id')->unsigned();
            $table->foreign('instructor_is_specialized_on_class_type_id')
                            ->references('id')->on('class_types');

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('instructors', function(Blueprint $table)
		{
			// dropping all columns added above
            $table->dropColumn('user_name_chn', 45);

            $table->dropColumn('resident_registration_number_first_part', 6);

            $table->dropColumn('resident_registration_number_last_part', 100);

            $table->dropColumn('address')->nullable();

            $table->dropColumn('bank_account_number', 100);

            $table->dropColumn('payday');

            $table->dropForeign('instructor_is_specialized_on_class_type_id');
            $table->dropColumn('instructor_is_specialized_on_class_type_id');
		});
	}

}
