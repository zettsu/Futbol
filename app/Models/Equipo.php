<?php

namespace Futbol\Models;

use Illuminate\Database\Eloquent\Model;

class Equipo extends Model{

  protected $table = 'equipos';
  
  public $timestamps = false;

  protected $primaryKey = 'equipo_id';

  protected $fillable = [
    'equipo_nombre','equipo_pais_id'
  ];

  public function pais_info(){
    return $this->HasOne('Futbol\Models\Pais','pais_id','equipo_pais_id');
  }

}
