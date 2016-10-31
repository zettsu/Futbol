<?php

namespace Futbol\Http\Controllers;

use Futbol\Models\Equipo;
use Futbol\Models\Partido;
use Futbol\Models\Estadio;
use Futbol\Models\Jugador;
use Futbol\Models\Pais;
use Futbol\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use Log;
use Illuminate\Support\Facades\Auth;
use Session;
use Redirect;
use Futbol\User;


class BackendController extends Controller{

  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
      $this->middleware('auth');
  }


  public function dash(){
    $userInfo = User::find(Auth::id())->first();
    return view('layouts.backend_layout')->with('userInfo',$userInfo);
  }

  public function last_activity(){
    $equipos = Equipo::with('pais_info')->get()->sortByDesc('equipo_created')->take(10);
    $partidos = Partido::with('visitante','local','estadio')->get()->sortByDesc('partido_created')->take(10);

    foreach ($partidos as $partido) {
      $partido->estadio->pais = Pais::where('pais_id',$partido->estadio->estadio_pais_id)->first();
    }

    $content['content'] = array(
      'title' => 'Dash',
      'last_equipos_added' => $equipos,
      'last_partidos_added'=> $partidos
    );

    return view('layouts.backend.content',$content);
  }

  public function logout(){
      Auth::logout();
      Session::flush();

      return Redirect::to('/');
  }
}
