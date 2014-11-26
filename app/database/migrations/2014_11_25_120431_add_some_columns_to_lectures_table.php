<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSomeColumnsToLecturesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('lectures', function(Blueprint $table)
		{
			//
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

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('lectures', function(Blueprint $table)
		{
			//
            $table->dropColumn('running_on_date');
            $table->dropColumn('starts_on');
            $table->dropColumn('started_on');
            $table->dropColumn('ends_on');
            $table->dropColumn('ended_on');
            $table->dropColumn('starts_at');
            $table->dropColumn('started_at');
            $table->dropColumn('ends_at');
            $table->dropColumn('ended_at');
		});
	}

}
