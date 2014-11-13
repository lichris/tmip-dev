<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        /**
         * creates the users table
         */
        Schema::create('users', function(Blueprint $table)
        {
            $table->increments('id');

            $table->string('user_name_kor', '30');

            $table->string('user_name_eng', '30');

            $table->string('user_email', 60);

            $table->string('password', 100);

            $table->string('private_email', '60');

            $table->char('gender', 1);

            $table->tinyInteger('age');

            $table->string('phone_number', 15);

            $table->string('role_name', 10);

            $table->rememberToken();

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
        Schema::drop('users');
	}

}
