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
			$table->increments('id');

            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');

            $table->string('name_chn')->nullable();

            // the date of birth will be encrypted
            $table->string('date_of_birth', 1024);

            // residence number will be encrypted
            $table->string('residence_number', 1024);

            $table->unsignedInteger('bank_id');
            $table->foreign('bank_id')->references('id')->on('banks');

            // bank account number will be encrypted
            $table->string('bank_account_number', 1024);

            // when payday is set with any other value than 25,
            // the payment will be paid on specified date
            $table->tinyInteger('payday')->default(25);
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
