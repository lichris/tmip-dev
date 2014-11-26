<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRunningCourses extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        // running_courses table handles actual-running-courses' data
        // it means that the courses from courses table will be referenced
        // to this table to generate 1st ~ end courses in this table
		Schema::create('running_courses', function(Blueprint $table)
		{
			$table->increments('id');

            // foreign key from courses
            $table->unsignedInteger('course_id');
            $table->foreign('course_id')->references('id')->on('courses');

            // represents the session number of the course
            $table->smallInteger('session_number')->unsigned();

            // 1999-12-12 10:14:25
            $table->dateTime('start_time_planned');

            // actual started time of the course, can be null if canceled
            $table->time('started_at')->nullable();

            // actual ended time of the course, can be null if canceled
            $table->time('ended_at')->nullable();

            // duration of the course
            $table->unsignedInteger('duration')->default(0);

            // true if canceled
            $table->boolean('is_canceled')->default(false);

            //
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
		Schema::drop('running_courses');
	}

}
