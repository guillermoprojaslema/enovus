<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CargosTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(EvaluacionesTableSeeder::class);
        $this->call(PreguntasTableSeeder::class);
        $this->call(RespuestasTableSeeder::class);
        $this->call(PreguntasRespuestasTableSeeder::class);
    }
}
