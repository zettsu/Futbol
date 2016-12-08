<?php

namespace Futbol;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function profile(){
      return $this->hasOne('Futbol\Models\Profile','user_id');
    }

    public function roles(){
      return $this->hasOne('Futbol\Models\AsignedRoles','user_id');
    }

    

}
