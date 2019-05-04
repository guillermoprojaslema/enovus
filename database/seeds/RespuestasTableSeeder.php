<?php

use Illuminate\Database\Seeder;
use App\Pregunta;
use App\Respuesta;

class RespuestasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->command->info('Cargando Respuestas de prueba');

        $preguntas = Pregunta::all();

        foreach ($preguntas as $pregunta){
            $respuesta = new Respuesta();
            $respuesta->titulo = 'Muy de acuerdo (5)';
            $respuesta->save();

            $respuesta = new Respuesta();
            $respuesta->titulo = 'De acuerdo (4)';
            $respuesta->save();

            $respuesta = new Respuesta();
            $respuesta->titulo = 'Neutral (3)';
            $respuesta->save();

            $respuesta = new Respuesta();
            $respuesta->titulo = 'Desacuerdo (2)';
            $respuesta->save();

            $respuesta = new Respuesta();
            $respuesta->titulo = 'Muy desacuerdo (1)';
            $respuesta->save();

        }


        $this->command->info('Cargado Respuestas de prueba con éxito');
    }
}
