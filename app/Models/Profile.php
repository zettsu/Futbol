<?php

namespace Futbol\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{

    protected $table = 'profile';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'primer_nombre'   ,'segundo_nombre',
        'primer_apellido' ,'segundo_apellido',
        'email_opcional' , 'image', 'extras',
        'nacimiento'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'id'
    ];



}
