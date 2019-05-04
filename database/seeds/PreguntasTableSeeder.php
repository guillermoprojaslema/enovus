<?php

use Illuminate\Database\Seeder;
use App\Pregunta;

class PreguntasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->command->info('Cargando Preguntas de prueba');
        $qty_records = 4;

        for ($i = 1; $i <= $qty_records; $i++) {
            $pregunta = new Pregunta();
            $pregunta->titulo = 'Pregunta ' . $i  . ' para Analista';
            $pregunta->evaluacion_id= 1;
            $pregunta->save();

        }

        for ($i = 1; $i <= $qty_records; $i++) {
            $pregunta = new Pregunta();
            $pregunta->titulo = 'Pregunta ' . $i  . ' para Programador';
            $pregunta->evaluacion_id= 2;
            $pregunta->save();
        }

        $this->command->info('Cargadoo Preguntas de prueba con éxito');

    }
}
