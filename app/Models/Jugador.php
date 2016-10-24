<?php

namespace Futbol\Models;

use Illuminate\Database\Eloquent\Model;

class Jugador extends Model
{
    protected $table = 'jugadores';
    public $timestamps = false;

    public function pais_info(){
      return $this->HasOne('Futbol\Models\Pais','pais_id','jugador_pais_id');
    }
}
