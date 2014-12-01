<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class RemoveResidentNumberFromInstructorsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('instructors', function(Blueprint $table)
		{
			$table->dropColumn('resident_number');
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
			$table->string('resident_number')->nullable();
		});
	}

}
