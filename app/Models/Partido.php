<?php

namespace Futbol\Models;

use Illuminate\Database\Eloquent\Model;

class Partido extends Model{

  public $table = 'partidos';
  public $timestamps = false;


  public function visitante(){
    return $this->HasOne('Futbol\Models\Equipo','equipo_id','partido_equipo_id_visitante');
  }

  public function local(){
    return $this->HasOne('Futbol\Models\Equipo','equipo_id','partido_equipo_id_local');
  }

  public function estadio(){
    return $this->HasOne('Futbol\Models\Estadio','estadio_id','partido_estadio_id');
  }

  public function pais_info(){
    return $this->HasOne('Futbol\Models\Pais','pais_id','partido_pais_id');
  }
}
