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
use Mail;
use Request;
use stdClass;
use Illuminate\Support\Facades\Request as Request2;
use Illuminate\Http\Request as rawRequest;
use Futbol\Models\Role;
use Validator;

class BackendController extends Controller{

  protected $req;


  public function __construct(rawRequest $req) {
      $this->middleware('auth');
      $this->middleware('guardian');
      $this->req = $req;
      $user = Auth::user();
  }


  private function is_admin(){
    $user_id = Auth::user()->id;
    $role_id = User::find($user_id)->roles->role_id;
    $role = Role::find($role_id);

    $is_admin = false;

    if($role->name == "admin"){
      $is_admin = true;
    }

    return $is_admin;
  }


  public function dash() {
    $this->authorize('dash');
    $userInfo = User::find(Auth::id())->first();
    $userInfo['is_admin'] = $this->is_admin();
    return view('layouts.backend_layout')->with('userInfo',$userInfo);
  }


  public function last_activity() {

    $equipos = Equipo::with('pais_info')->get()->sortByDesc('equipo_created')->take(10);
    $partidos = Partido::with('visitante','local')->get()->sortByDesc('partido_created')->take(10);

    // Revisar porque no anda
    //foreach ($partidos as $partido) {
      //$partido->estadio->pais = Pais::where('pais_id',$partido->estadio->estadio_pais_id)->first();
    //}

    $content['content'] = array(
      'title' => 'Dash',
      'last_equipos_added' => $equipos,
      'last_partidos_added'=> $partidos
    );

    return view('layouts.backend.content',$content);
  }


  public function logout() {
      Auth::logout();
      Session::flush();

      return Redirect::to('/');
  }


  public function new_message() {
    $data = [];

    $datos = new stdClass;
    $datos->asunto = Request2::input('titulo');
    $datos->mensaje = Request2::input('mensaje');

    $data['body'] = $datos->mensaje;
    $data['titulo_msj'] = "Envio de Prueba";
    $data['from'] =  "jmatias.olivera@gmail.com";
    $data['subject'] = $datos->asunto;

    Mail::send('layouts.message', $data, function($message) use ($datos) {
     $message->from("jmatias.olivera@gmail.com","Matias");
     $message->subject("subject a mano");
     $message->to("jmatias.olivera@gmail.com","Prueba ");
    });

  }


  public function loadmessagesender() {
    return view('layouts.backend.messages');
  }


}
