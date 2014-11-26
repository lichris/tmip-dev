<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLectures extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('lectures', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('lecture_name');
            $table->string('list_of_lecture_members')->nullable();
            $table->unsignedInteger('lecture_type_id');
            $table->foreign('lecture_type_id')->references('id')->on('lecture_types');
            $table->unsignedInteger('run_by_instructor_id');
            $table->foreign('run_by_instructor_id')->references('id')->on('instructors');
            $table->unsignedInteger('running_for_company_id');
            $table->foreign('running_for_company_id')->references('id')->on('companies');
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
		Schema::drop('lectures');
	}

}
