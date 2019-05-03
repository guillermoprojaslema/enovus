<?php

use Illuminate\Database\Seeder;
use App\Cargo;


class CargosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->command->info('Cargando Cargos por defecto');

        $cargo = new Cargo();
        $cargo->nombre = 'Jefatura';
        $cargo->save();

        $cargo = new Cargo();
        $cargo->nombre = 'Analista';
        $cargo->save();

        $cargo = new Cargo();
        $cargo->nombre = 'Programador';
        $cargo->save();

        $this->command->info('Cargos por defecto cargados exitosamente');


    }
}
