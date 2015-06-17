<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaUsuarios extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tbl_usuarios', function(Blueprint $table)
		{
			//
			$table->increments('id_negocio');
			$table->string('email', 62);
			$table->string('nombre',50);
			$table->string('clave',50);
			$table->string('usuario',25);
			$table->string('identificador',13);
			$table->integer('estado');


		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tbl_usuarios');
	}

}