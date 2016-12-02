<?php

namespace Futbol\Http\Controllers\Auth;

use Futbol\Http\Controllers\Controller;
use Illuminate\Http\Request as rawRequest;

class Guardian extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    public function auditar($request){
      echo "ALL";
      var_dump($request->all());
        echo "user";
      var_dump($request->user());
        echo "path";
      var_dump($request->path());
    }
}
