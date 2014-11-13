<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClassesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('classes', function(Blueprint $table)
		{
			$table->increments('id');

            $table->string('class_name', 45);

            $table->string('list_of_class_members');

            $table->integer('class_type_id')->unsigned();
            $table->foreign('class_type_id')->references('id')->on('class_types');

            $table->integer('class_is_run_by_instructor_id')->unsigned();
            $table->foreign('class_is_run_by_instructor_id')
                    ->references('user_id')->on('instructors');

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
		Schema::drop('classes');
	}

}
