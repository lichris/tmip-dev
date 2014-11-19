<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsToStudentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('students', function(Blueprint $table)
		{
			//
            $table->string('deputy', 100)->nullable()->after('position');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('students', function(Blueprint $table)
		{
			//
            $table->dropColumn('deputy');
		});
	}

}
