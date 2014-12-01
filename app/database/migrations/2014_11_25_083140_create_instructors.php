<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInstructors extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('instructors', function(Blueprint $table)
		{
			$table->unsignedInteger('id');
            $table->foreign('id')->references('id')->on('users');
            $table->string('user_name_chn')->nullable();
            $table->string('list_of_handling_classes')->nullable();
            $table->string('date_of_birth', 8);
            $table->string('resident_number')->nullable();
            $table->string('bank_name');
            $table->string('bank_account_number');
            $table->string('specialized_on_lecture_type_id');
            $table->tinyInteger('payday')->unsigned()->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('instructors');
	}

}
