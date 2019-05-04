<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Respuesta extends Model
{
    public function pregunta()
    {
        return $this->hasMany('App\Pregunta');
    }
}
