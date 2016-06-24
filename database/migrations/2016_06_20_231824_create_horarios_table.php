<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHorariosTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('horarios', function(Blueprint $table) {
            $table->increments('id');
            $table->string('descricao');
		});

		//Insert some stuff
		DB::table('horarios')->insert([
			['descricao' =>'07:30 até 08:20'],
			['descricao' =>'08:20 até 09:10'],
			['descricao' =>'09:10 até 10:00'],
			['descricao' =>'10:20 até 11:10'],
			['descricao' =>'11:10 até 12:00'],

			//horários da tarde
			['descricao' =>'13:00 até 13:50'],
			['descricao' =>'13:50 até 14:40'],
			['descricao' =>'14:40 até 15:30'],
			['descricao' =>'15:50 até 16:40'],
			['descricao' =>'16:40 até 17:30'],

			//horários da noite
			['descricao' => '18:40 até 19:30'],
			['descricao' => '19:30 até 20:20'],
			['descricao' => '20:20 até 21:10'],
			['descricao' => '21:20 até 22:10'],
			['descricao' => '22:10 até 23:00']
		]);
		

	}



	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::drop('horarios');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
	}

}
