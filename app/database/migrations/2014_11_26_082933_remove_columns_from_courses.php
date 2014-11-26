<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class RemoveColumnsFromCourses extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('courses', function(Blueprint $table)
		{
            $table->dropColumn('running_on_date')->nullable();
            $table->dropColumn('starts_on')->nullable();
            $table->dropColumn('started_on')->nullable();
            $table->dropColumn('ends_on')->nullable();
            $table->dropColumn('ended_on')->nullable();
            $table->dropColumn('starts_at')->nullable();
            $table->dropColumn('started_at')->nullable();
            $table->dropColumn('ends_at')->nullable();
            $table->dropColumn('ended_at')->nullable();
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
            $table->string('running_on_date')->nullable();
            $table->date('starts_on')->nullable();
            $table->date('started_on')->nullable();
            $table->date('ends_on')->nullable();
            $table->date('ended_on')->nullable();
            $table->time('starts_at')->nullable();
            $table->time('started_at')->nullable();
            $table->time('ends_at')->nullable();
            $table->time('ended_at')->nullable();
		});
	}

}
