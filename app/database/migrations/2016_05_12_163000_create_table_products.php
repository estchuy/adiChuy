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

		Schema::create('homes', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nombre');
			$table->string('construccion');
			$table->string('terreno');
			$table->string('banos');
			$table->string('frente');
			$table->string('fondo');
			$table->string('municipalidad');
			$table->integer('zona');
			$table->string('project_id');
			$table->text('descripcion');
			$table->string('phone');
			$table->float('initial_price');
			$table->float('last_price');
			$table->string('typeOfMoney');
			$table->softDeletes();
			$table->timestamps();
		});

		Schema::create('projects', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nombre');
			$table->integer('apartamentos')->default(0);
			$table->integer('casas')->default(0);
			$table->text('descripcion');
			$table->softDeletes();
			$table->timestamps();
		});

		Schema::create('images', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nombre');
			$table->integer('project_id')->default(0);
			$table->integer('home_id')->default(0);
			$table->integer('default')->default(0);
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
		Schema::dropIfExists("projects");
		Schema::dropIfExists("homes");
		Schema::dropIfExists("images");
	}

}
