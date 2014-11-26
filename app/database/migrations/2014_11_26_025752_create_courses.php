<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCourses extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('courses', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('course_name');
            $table->string('list_of_course_members')->nullable();
            $table->unsignedInteger('course_type_id');
            $table->foreign('course_type_id')->references('id')->on('course_types');
            $table->unsignedInteger('run_by_instructor_id');
            $table->foreign('run_by_instructor_id')->references('id')->on('instructors');
            $table->unsignedInteger('running_for_company_id');
            $table->foreign('running_for_company_id')->references('id')->on('companies');
            $table->string('running_on_date')->nullable();
            $table->date('starts_on')->nullable();
            $table->date('started_on')->nullable();
            $table->date('ends_on')->nullable();
            $table->date('ended_on')->nullable();
            $table->time('starts_at')->nullable();
            $table->time('started_at')->nullable();
            $table->time('ends_at')->nullable();
            $table->time('ended_at')->nullable();
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
		Schema::drop('courses');
	}

}
