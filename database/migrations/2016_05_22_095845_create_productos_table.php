<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('productos', function(Blueprint $table)
		{
			// $table->increments('id');
			// $table->integer('codigoproducto',200)->unique();
			// $table->string('nombreproducto');
			// $table->integer('codigo_tipo')->unsigned();
			// $table->foreign('codigo_tipo')->references('id')
			// ->on('tipo_productos')
			// ->onUpdate('CASCADE')
			// ->onDelete('CASCADE');

			
			$table->increments('id');
            $table->timestamps();
            $table->integer('codigoproducto')->unique();
            $table->string('nombreproducto');
            $table->integer('codigotipo')->unsigned();
            $table->foreign('codigotipo')->references('id')->on('tipo_productos')
			->onUpdate('CASCADE')
			->onDelete('CASCADE');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('productos');
	}

}
