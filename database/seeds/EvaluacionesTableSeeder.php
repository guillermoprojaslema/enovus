<?php

use Illuminate\Database\Seeder;
use App\Evaluacion;

class EvaluacionesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->command->info('Cargando Evaluaciones de prueba');

        $evaluacion = new Evaluacion();
        $evaluacion->titulo = 'Evaluación para Analista';
        $evaluacion->evaluador_id  = 1;
        $evaluacion->evaluado_id  = 3;
        $evaluacion->save();

        $evaluacion = new Evaluacion();
        $evaluacion->titulo = 'Evaluación para Analista';
        $evaluacion->evaluador_id  = 1;
        $evaluacion->evaluador_id  = 4;
        $evaluacion->save();

        $evaluacion = new Evaluacion();
        $evaluacion->titulo = 'Evaluación para Analista';
        $evaluacion->evaluador_id  = 1;
        $evaluacion->evaluado_id  = 5;
        $evaluacion->save();

        $evaluacion = new Evaluacion();
        $evaluacion->titulo = 'Evaluación para Analista';
        $evaluacion->evaluador_id  = 1;
        $evaluacion->evaluado_id  = 5;
        $evaluacion->save();

        $evaluacion = new Evaluacion();
        $evaluacion->titulo = 'Evaluación para Programador';
        $evaluacion->evaluador_id  = 2;
        $evaluacion->evaluado_id  = 6;
        $evaluacion->save();

        $evaluacion = new Evaluacion();
        $evaluacion->titulo = 'Evaluación para Programador';
        $evaluacion->evaluador_id  = 2;
        $evaluacion->evaluado_id  = 7;
        $evaluacion->save();

        $evaluacion = new Evaluacion();
        $evaluacion->titulo = 'Evaluación para Programador';
        $evaluacion->evaluador_id  = 2;
        $evaluacion->evaluado_id  = 8;
        $evaluacion->save();

        $this->command->info('Cargado Evaluaciones de prueba con éxito');



    }
}
