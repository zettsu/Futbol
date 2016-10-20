<?php

namespace App\Http\Controllers\Backend;

use App\Models\Partido;
use App\Http\Controllers\Controller;


class BackendController extends Controller
{
  public function index(){

    //$partidos = Partido::all();
    return view('layouts.backend_layout');//,['partidos'=>$partidos]);
  }




}
