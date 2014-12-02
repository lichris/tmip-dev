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
		Schema::create('running_courses', function(Blueprint $table)
		{
			$table->increments('id');

            $table->unsignedInteger('course_id');
            $table->foreign('course_id')->references('id')->on('courses');

            $table->integer('session_number');

            $table->dateTime('planned_start_datetime');

            $table->dateTime('planned_end_datetime');

            $table->dateTime('actual_start_datetime');

            $table->dateTime('actual_end_datetime');

            // not started
            // started : just for 5 mins (attendance check is allowed only in this status)
            // in progress : after 5min, turns automatically and attendance check will be blocked
            // completed
            $table->string('status');

            $table->boolean('is_canceled')->default(false);

            $table->dateTime('canceled_datetime')->nullable();

            // sc : same day cancel
            // ad : advanced cancel (until 20:00 on the day before)
            // none
            // will be automatically set by system
            $table->string('cancel_type')->default('none');

            $table->boolean('is_rearranged')->default(false);

            $table->unsignedInteger('rearranged_course_id')->nullable();
            $table->foreign('rearranged_course_id')->references('id')->on('running_courses');

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
