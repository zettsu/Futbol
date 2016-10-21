<?php

namespace App\Http\Controllers\Backend;

use App\Models\Equipo;
use App\Models\Partido;
use App\Http\Controllers\Controller;


class BackendController extends Controller
{
  public function index(){

    $equipos = Equipo::all()->sortByDesc('created');
    //$partidos = Partido::all()->sortByDesc('created');
    //$partido = new Partido();
    dd($partido = Partido::with('visitante','local','estadio')->get());
    die();
    $content['content'] = array(
      'title' => 'Dash',
      'last_equipos_added' => $equipos//,
      //'last_partidos_added'=> $partidos
    );

    return view('layouts.backend_layout',$content);
  }
}
