<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evaluacion extends Model
{
    protected $table = 'evaluaciones';

    public function evaluados(){
        return $this->belongsTo('App\User', 'evaluado_id');
    }

    public function preguntas(){
        return $this->hasMany('App\Pregunta');
    }
}
