<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DropColumnRoleNameInUserAndUpdateToHasPermissionOfRoleId extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('users', function(Blueprint $table)
		{
			// drop column 'role_name'
            // and replace with 'user_has_permission_of_role_id'
            // which is a foreign key of roles table
            $table->dropColumn('role_name');
            $table->integer('user_has_permission_of_role_id')->unsigned()->after('password');
            $table->foreign('user_has_permission_of_role_id')
                    ->references('id')->on('roles');
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
			// do exact opposite to above
            $table->dropForeign('users_user_has_permission_of_role_id_foreign');
            $table->dropColumn('user_has_permission_of_role_id');
            $table->string('role_name', 10)->after('password');
		});
	}

}
