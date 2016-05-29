<?php

use Illuminate\Database\Seeder;

class IncidenciaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(\Salf\Entities\Incidencia::class, 10)->create();
    }
}
