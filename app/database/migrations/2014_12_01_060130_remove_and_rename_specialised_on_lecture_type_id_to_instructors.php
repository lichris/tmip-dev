<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class RemoveAndRenameSpecialisedOnLectureTypeIdToInstructors extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('instructors', function(Blueprint $table)
		{
			$table->renameColumn('specialized_on_lecture_type_id', 'specialized_on_course_type_id');
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
            $table->renameColumn('specialized_on_course_type_id', 'specialized_on_lecture_type_id');
		});
	}

}
