<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeVarcharLengthOfPasswordInUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('users', function(Blueprint $table)
		{
			//
            DB::statement('ALTER TABLE `users` MODIFY `password` VARCHAR(255);');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('users', function(Blueprint $table)
		{
			//
            DB::statement('ALTER TABLE `users` MODIFY `password` VARCHAR(100);');
		});
	}

}
