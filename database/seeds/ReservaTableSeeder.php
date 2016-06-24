<?php

use Illuminate\Database\Seeder;

class ReservaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\Salf\Entities\Reserva::class, 10)->create();
    }
}
