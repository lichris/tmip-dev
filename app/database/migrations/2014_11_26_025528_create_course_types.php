<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCourseTypes extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('course_types', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('course_type_name');
            $table->string('parent_course_type_name')->nullable();
            $table->boolean('select_multiple');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('course_types');
	}

}
