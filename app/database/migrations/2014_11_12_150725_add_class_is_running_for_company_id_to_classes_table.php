<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddClassIsRunningForCompanyIdToClassesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('classes', function(Blueprint $table)
		{
			// adding 'class_is_running_for_company_id' to the table classes
            // which maps company and class with one to many relationship
            $table->integer('class_is_running_for_company_id')
                    ->unsigned()->after('class_is_run_by_instructor_id');
            $table->foreign('class_is_running_for_company_id')
                    ->references('id')->on('companies');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('classes', function(Blueprint $table)
		{
			//
            $table->dropForeign('classes_class_is_running_for_company_id_foreign');
            $table->dropColumn('class_is_running_for_company_id');
		});
	}

}
