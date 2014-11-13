<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeVarcharLengthOfEmployeeNumberInStudentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('students', function(Blueprint $table)
		{
			// change the length of 'employee_number'
            DB::statement('ALTER TABLE `students` MODIFY `employee_number` VARCHAR(255);');
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
            DB::statement('ALTER TABLE `students` MODIFY `employee_number` VARCHAR(20);');
		});
	}

}
