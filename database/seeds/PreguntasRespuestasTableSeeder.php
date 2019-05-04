<?php

use Illuminate\Database\Seeder;

class PreguntasRespuestasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $preguntas = \App\Pregunta::all();

        foreach ($preguntas as $pregunta) {
            DB::table('pregunta_respuesta')->insert([
                ['pregunta_id' => 1, 'respuesta_id' => 1, 'valor' => null],
                ['pregunta_id' => 1, 'respuesta_id' => 2, 'valor' => null],
                ['pregunta_id' => 1, 'respuesta_id' => 3, 'valor' => null],
                ['pregunta_id' => 1, 'respuesta_id' => 4, 'valor' => null],
                ['pregunta_id' => 1, 'respuesta_id' => 5, 'valor' => null],
                ['pregunta_id' => 2, 'respuesta_id' => 6, 'valor' => null],
                ['pregunta_id' => 2, 'respuesta_id' => 7, 'valor' => null],
                ['pregunta_id' => 2, 'respuesta_id' => 8, 'valor' => null],
                ['pregunta_id' => 2, 'respuesta_id' => 9, 'valor' => null],
                [ 'pregunta_id' => 2, 'respuesta_id' => 10, 'valor' => null],
                [ 'pregunta_id' => 3, 'respuesta_id' => 11, 'valor' => null],
                [ 'pregunta_id' => 3, 'respuesta_id' => 12, 'valor' => null],
                [ 'pregunta_id' => 3, 'respuesta_id' => 13, 'valor' => null],
                [ 'pregunta_id' => 3, 'respuesta_id' => 14, 'valor' => null],
                [ 'pregunta_id' => 3, 'respuesta_id' => 15, 'valor' => null],
                [ 'pregunta_id' => 4, 'respuesta_id' => 16, 'valor' => null],
                [ 'pregunta_id' => 4, 'respuesta_id' => 17, 'valor' => null],
                [ 'pregunta_id' => 4, 'respuesta_id' => 18, 'valor' => null],
                [ 'pregunta_id' => 4, 'respuesta_id' => 19, 'valor' => null],
                [ 'pregunta_id' => 4, 'respuesta_id' => 20, 'valor' => null],
                [ 'pregunta_id' => 5, 'respuesta_id' => 21, 'valor' => null],
                [ 'pregunta_id' => 5, 'respuesta_id' => 22, 'valor' => null],
                [ 'pregunta_id' => 5, 'respuesta_id' => 23, 'valor' => null],
                [ 'pregunta_id' => 5, 'respuesta_id' => 24, 'valor' => null],
                [ 'pregunta_id' => 5, 'respuesta_id' => 25, 'valor' => null],
                [ 'pregunta_id' => 6, 'respuesta_id' => 26, 'valor' => null],
                [ 'pregunta_id' => 6, 'respuesta_id' => 27, 'valor' => null],
                [ 'pregunta_id' => 6, 'respuesta_id' => 28, 'valor' => null],
                [ 'pregunta_id' => 6, 'respuesta_id' => 29, 'valor' => null],
                [ 'pregunta_id' => 6, 'respuesta_id' => 30, 'valor' => null],
                [ 'pregunta_id' => 7, 'respuesta_id' => 31, 'valor' => null],
                [ 'pregunta_id' => 7, 'respuesta_id' => 32, 'valor' => null],
                [ 'pregunta_id' => 7, 'respuesta_id' => 33, 'valor' => null],
                [ 'pregunta_id' => 7, 'respuesta_id' => 34, 'valor' => null],
                [ 'pregunta_id' => 7, 'respuesta_id' => 35, 'valor' => null],
                [ 'pregunta_id' => 8, 'respuesta_id' => 36, 'valor' => null],
                [ 'pregunta_id' => 8, 'respuesta_id' => 37, 'valor' => null],
                [ 'pregunta_id' => 8, 'respuesta_id' => 38, 'valor' => null],
                [ 'pregunta_id' => 8, 'respuesta_id' => 39, 'valor' => null],
                [ 'pregunta_id' => 8, 'respuesta_id' => 40, 'valor' => null],
            ]);
        }
    }
}
