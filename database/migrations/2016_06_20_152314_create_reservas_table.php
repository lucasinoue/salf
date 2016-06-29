<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservasTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('reservas', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('id_usuario');
            $table->integer('id_motivo');
            $table->integer('id_sala');
            $table->date('data');
            $table->integer('id_horario');
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
		
		Schema::drop('reservas');
	}

}
