<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTipoProductosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tipo_productos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
			$table->string('codigotipo', 100)->unique;
			$table->string('nombretipo', 100);
			$table->integer('cantidad');

			// $table->increments('id');
   //          $table->timestamps();
   //          $table->string('nombretipo');
   //          $table->integer('cantidad');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tipo_productos');
	}

}
