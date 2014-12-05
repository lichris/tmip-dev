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

            $table->string('name');

            // if set true, has sub types
            $table->boolean('has_sub_types')->default(false);

            // if set true, can select multiple number of types
            $table->boolean('can_select_multiple')->default(false);

            // self fk for multiple selection of course types
            $table->unsignedInteger('parent_id')->nullable();
            $table->foreign('parent_id')->references('id')->on('course_types');
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
