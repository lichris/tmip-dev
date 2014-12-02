<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInstructorsSpecializeCourseTypes extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('instructors_specialize_course_types', function(Blueprint $table)
		{
            // this is the pivot table of instructors and course types
			$table->increments('id');

            $table->unsignedInteger('instructor_id');
            $table->foreign('instructor_id')->references('id')->on('instructors');

            $table->unsignedInteger('course_type_id');
            $table->foreign('course_type_id')->references('id')->on('course_types');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('instructors_specialize_course_types');
	}

}
