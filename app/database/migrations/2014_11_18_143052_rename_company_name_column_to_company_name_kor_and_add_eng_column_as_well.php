<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenameCompanyNameColumnToCompanyNameKorAndAddEngColumnAsWell extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('companies', function(Blueprint $table)
		{
			//
            $table->string('company_name_eng')->after('company_name');
            $table->renameColumn('company_name', 'company_name_kor');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('companies', function(Blueprint $table)
		{
			//
            $table->dropColumn('company_name_eng');
            $table->renameColumn('company_name_kor', 'company_name');
		});
	}

}
