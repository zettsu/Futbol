<?php

namespace Futbol\Http\Controllers;

use Futbol\User;
use Futbol\Models\Profile;
use Futbol\Models\AsignedRoles;
use Futbol\Models\Role;
use Validator;
use Futbol\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;


class RoleCreatorController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function view()
    {
      return view('layouts.backend.roles');
    }

    public function createRole(){
      $role_name = Request2::input('role_name');
      $role_description = Request2::input('role_description');
      $actions_params = Request2::input('actions');

      $validate =  Validator::make(Request2::all(), [
          'role_name' => 'required|unique:roles,name'
      ]);

      if($validate->fails()){
        echo "fallo";
      }else{
        $actions = new StdClass;
        $actions->actions = $actions_params;

        $role = new Role;
        $role->name = $role_name;
        $role->actions = json_encode($actions);
        $role->description = $role_description;

        $role->save();
      }

      return $role;

    }
}
