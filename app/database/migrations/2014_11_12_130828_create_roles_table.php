<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('roles', function(Blueprint $table)
        {
            $table->increments('id');

            $table->string('role_name', 20);
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('roles', function(Blueprint $table)
		{
			//
            Schema::drop('roles');
		});
	}

}
