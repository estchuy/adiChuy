<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnTableHomes extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('homes', function(Blueprint $table)
        {
      		$table->string('rooms');
      		
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('homes', function(Blueprint  $table)
		{
		    $table->dropColumn('rooms');
		});
	}

}
