<?php

namespace Futbol\Http\Controllers\Backend;

use Futbol\Http\Controllers\Controller;

use Futbol\Models\Equipo;
use Futbol\Models\Partido;
use Futbol\Models\Estadio;

use Illuminate\Http\Request;
use Redirect;
use Response;

use Validator;

class PartidoController extends Controller
{
    public function index(){}

    public function store(Request $request){
      $code = 200;
      $msg = 'OK';
      $status = ['status' => $msg, 'code' => $code];
      $content = ['message' => 'Partido Agregado', 'status' => 0];

      $rules = array(
              'partido_estadio_id' => 'required',
              'partido_equipo_id_local' =>'required',
              'partido_equipo_id_visitante'=>'required',
              'partido_inicio' => 'required',
              'partido_fin'  => 'required'
          );

      $validator = Validator::make($request->all(), $rules);

      if($validator->fails()) {
        $content['message'] = 'Error al agregar el Partido.';
        $content['status'] = 13;
      }else{
        $partido = new Partido();
        $partido->partido_estadio_id = $request->input('partido_estadio_id');
        $partido->partido_equipo_id_local = $request->input('partido_equipo_id_local');
        $partido->partido_equipo_id_visitante = $request->input('partido_equipo_id_visitante');
        $partido->partido_inicio = $request->input('partido_inicio');
        $partido->partido_fin =$request->input('partido_fin');

    	  $partido->save();
      }

      return $this->makeResponse($content, $status);
    }

    public function create(){
      $estadios = Estadio::pluck('estadio_nombre', 'estadio_id');
      $equipos = Equipo::pluck('equipo_nombre', 'equipo_id');

      return view('layouts.backend.partido.create', ['lista_estadios' => $estadios, 'lista_equipos' => $equipos] );
    }

    public function destroy(){}

    public function show($id){
      $partido = Partido::find($id);

      return view('layouts.backend.partido.show',compact('partido'));
    }

    public function edit(){}

    public function actions(){
      return view('layouts.backend.partido.actions');
    }

    public function makeResponse($content, $status){
      $header = array ('Content-Type' => 'application/json; charset=UTF-8','charset' => 'utf-8');

      $response =
      [
      'response' => ['content' => $content ,
                     'status'  => $status ]
      ];

      return response()->json($content , $status['code'], $header, JSON_UNESCAPED_UNICODE);
    }

}
