<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddColumnsToCourses extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('courses', function(Blueprint $table)
		{
            // starting date of the course
            $table->date('starts_on');

            // ending date of the course
            $table->date('ends_on');

            // starting time of the course
            $table->time('starts_at');

            // ending time of the course
            $table->time('ends_at');

            // determines which day the course will be run
            // 1: mon, 2: tue ...
            // will be saved as a string with following format
            // 1,2,3,4,5,6,7 means the course will run everyday a week
            $table->string('running_date');

            // saves calculated run time of the course in seconds
            $table->integer('duration');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('courses', function(Blueprint $table)
		{
            $table->dropColumn('starts_on');
            $table->dropColumn('ends_on');
            $table->dropColumn('starts_at');
            $table->dropColumn('ends_at');
            $table->dropColumn('running_date');
            $table->dropColumn('duration');
		});
	}

}
