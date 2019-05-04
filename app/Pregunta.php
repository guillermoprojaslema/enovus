<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pregunta extends Model
{
    public function evaluacion(){
        return $this->belongsTo('App\Evaluacion');
    }

    public function respuestas(){
        return $this->hasMany('App\Respuesta');
    }
}
