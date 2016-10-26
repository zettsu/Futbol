<?php

namespace Futbol\Http\Controllers\Backend;

use Futbol\Http\Controllers\Controller;

use Futbol\Models\Pais;
use Futbol\Models\Equipo;

use Illuminate\Http\Request;
use Redirect;
use Response;

use Validator;

class EquipoController extends Controller
{
  public function index(){}
  public function store(Request $request){
    $code = 200;
    $msg = 'OK';
    $status = ['status' => $msg, 'code' => $code];
    $content = ['message' => 'Equipo Agregado', 'status' => 0];

    $rules = array(
            'equipo_pais_id' => 'required',
            'equipo_nombre'  => 'required'
        );

    $validator = Validator::make($request->all(), $rules);

    if($validator->fails()) {
      $content['message'] = 'Error al agregar el Equipo.';
      $content['status'] = 13;
    }else{
      $inputs = $request->all();
  	  Equipo::save($inputs);
    }

    return $this->makeResponse($content, $status);
  }

  public function create(){
    $items = Pais::pluck('pais_nombre', 'pais_id');

    return view('layouts.backend.equipo.create', ['lista_paises' => $items] );
  }

  public function destroy(){}

  public function show(){}

  public function edit($id){
    $equipo = Equipo::find($id);

    $items = Pais::pluck('pais_nombre', 'pais_id');
    return view('layouts.backend.equipo.edit')->with(['equipo' => $equipo, 'lista_paises' => $items]);
  }

  public function actions(){
    return view('layouts.backend.equipo.actions');
  }

  public function update($id, Request $request){
    $equipo = Equipo::find($id);

    $nuevo_equipo_nombre = $request->input('equipo_nombre');
    $nuevo_equipo_pais_id = $request->input('equipo_pais_id');

    $equipo->equipo_nombre = $nuevo_equipo_nombre;
    $equipo->equipo_pais_id = $nuevo_equipo_pais_id;

    $equipo->save();
  }

  public function setHeader(){}

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
