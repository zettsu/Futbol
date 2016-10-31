<?php

namespace Futbol\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model{

  public function users(){
    return belongsToMany('App\User','id','user_id');
  }

}
