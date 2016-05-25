<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProducts extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('username');
			$table->string('name');
			$table->string('email');
			$table->string('password');
			$table->integer('user_type_id');
			$table->string('phone');
			$table->string('remember_token');
			$table->softDeletes();
			$table->timestamps();
		});

		Schema::create('token', function(Blueprint $table)
		{
			$table->string('email')->index();
			$table->string('token')->index();
			$table->timestamp('created_at');
		});

		Schema::create('user_types', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->softDeletes();
			$table->timestamps();
		});

		Schema::create('menus', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('route');
			$table->integer('parent_id')->default(0);
      		$table->string('icon');
			$table->softDeletes();
			$table->timestamps();
		});

		Schema::create('clients', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('email');
			$table->string('product_id');
			$table->text('comment');
			$table->string('phone');
			$table->softDeletes();
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
		Schema::dropIfExists("user");
		Schema::dropIfExists("user_types");
		Schema::dropIfExists("menus");
		Schema::dropIfExists("clients");
		Schema::dropIfExists("token");
	}

}
