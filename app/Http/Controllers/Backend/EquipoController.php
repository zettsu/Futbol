<?php

namespace Futbol\Http\Controllers\Backend;

use Futbol\Http\Controllers\Controller;

use Futbol\Models\Pais;
use Futbol\Models\Equipo;

use Illuminate\Http\Request;
use Redirect;



class EquipoController extends Controller
{
  public function index(){}
  public function store(){}

  public function create(Equipo $equipo,Request $request){
  //  $input = $request->all();
	//  Equipo::create( $input );

  return redirect('/backend')->with('message', 'Equipo agregado!.');
  }

  public function add(){
    $items = Pais::pluck('pais_nombre', 'pais_id');
    return view('layouts.backend.equipo.add', ['lista_paises' => $items] );
  }

  public function destroy(){}

  public function show(){}

  public function edit(){}

}
