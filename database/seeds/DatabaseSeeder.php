<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(DepartamentoTableSeeder::class);
        $this->call(SalaTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(IncidenciaTableSeeder::class);
        $this->call(MotivoTableSeeder::class);
        $this->call(ReservaTableSeeder::class);
        
    }
}
