<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //factory(\Salf\Entities\User::class, 10)->create();
        factory(\Salf\Entities\User::class)->create([
        	'name' => 'Lucas Inoue',
        	'email' => 'lucas.inoue.lcs@gmail.com',
        	'password' => bcrypt('123456'),
        	'departamento_id' => 1,
        	'tipo' => 1,
        ]);
    }
}