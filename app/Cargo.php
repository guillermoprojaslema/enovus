<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    protected $table = 'cargos';

    /**
     * Relación de 1 cargo por Usuario
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function users(){
        return $this->hasOne('App\Cargo');
    }
}
