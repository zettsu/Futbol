<?php

namespace Futbol\Models;

use Illuminate\Database\Eloquent\Model;

class Estadio extends Model
{
  protected $table = 'estadios';

  public function pais_info(){
    return $this->HasOne('Futbol\Models\Pais','pais_id','estadio_pais_id');
  }

}
