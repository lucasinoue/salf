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
            $table->integer('user_id');
            $table->integer('motivo_id');
            $table->integer('sala_id');
            $table->date('data');
            $table->integer('horario_id');
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
