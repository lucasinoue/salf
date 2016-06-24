<?php

use Illuminate\Database\Seeder;

class HorarioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\Salf\Entities\Horario::class, 15)->create();
    }
}