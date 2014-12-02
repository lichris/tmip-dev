<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsers extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');

            // login email
            $table->string('account_email')->unique();

            // password
            $table->string('password');

            // defines role from roles table
            $table->unsignedInteger('role_id');
            $table->foreign('role_id')->references('id')->on('roles');

            // korea user name
            $table->string('name_kor');

            // english user name, can be null
            $table->string('name_eng')->nullable();

            // private_email represents android registered email
            // TODO : should not be null on mobile app
            $table->string('private_email')->nullable();

            // reachable user contact
            $table->string('phone_number')->nullable();

            $table->char('gender', 1);

            $table->tinyInteger('age')->nullable();

            $table->string('file_location_of_profile_img')->default('no_image');

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
