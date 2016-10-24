<?php

namespace Futbol\Models;

use Illuminate\Database\Eloquent\Model;

class Equipo extends Model{

  public $table = 'equipos';
  public $timestamps = false;

  public function pais_info(){
    return $this->HasOne('Futbol\Models\Pais','pais_id','equipo_pais_id');
  }

}
