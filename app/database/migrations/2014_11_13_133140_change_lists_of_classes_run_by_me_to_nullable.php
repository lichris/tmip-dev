<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeListsOfClassesRunByMeToNullable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('instructors', function(Blueprint $table)
		{
			// changes the column 'lists_of_classes_run_by_me' to nullable
            DB::statement('ALTER TABLE `instructors` MODIFY `lists_of_classes_run_by_me` VARCHAR(255) NULL;');
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
			// restore the column as it was before
            DB::statement('ALTER TABLE `instructors` MODIFY `lists_of_classes_run_by_me` VARCHAR(255);');
		});
	}

}
