<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStudents extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('students', function(Blueprint $table)
		{
			$table->unsignedInteger('id');
            $table->foreign('id')->references('id')->on('users');
            $table->integer('employee_of_company_id')->unsigned();
            $table->foreign('employee_of_company_id')->references('id')->on('companies');
            $table->string('position');
            $table->string('employee_number')->nullable();
        });
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('students');
	}

}
