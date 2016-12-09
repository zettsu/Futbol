<?php

namespace Futbol\Http\Controllers;

use Futbol\User;
use Futbol\Models\Profile;
use Futbol\Models\AsignedRoles;
use Futbol\Models\Role;
use Validator;
use Futbol\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;


class RoleCreatorController extends Controller {


    public function __construct() {
        $this->middleware('auth');
    }


    public function view() {
      $this->authorize('createRole');
      return view('layouts.backend.roles');
    }


    private function is_admin() {

      $user_id = Auth::user()->id;
      $role_id = User::find($user_id)->roles->role_id;
      $role = Role::find($role_id);

      $is_admin = false;

      if($role->name == "admin") {
        $is_admin = true;
      }

      return $is_admin;
    }


    public function createRole() {

      $role_name        = Request2::input('role_name');
      $role_description = Request2::input('role_description');
      $actions_params   = Request2::input('actions');

      $validate =  Validator::make(Request2::all(), [
          'role_name' => 'required|unique:roles, name',
          'actions' => 'required'
      ]);

      if($this->is_admin()) {
        if(!$validate->fails()) {
          $actions = new StdClass;
          $actions->actions = $actions_params;

          $role = new Role;
          $role->name = $role_name;
          $role->actions = json_encode($actions);
          $role->description = $role_description;
          $role->save();

          return response()->json(['code' => 0, 'info' => 'Success.'], 200);
        }else{
          $error = $validate->errors()->all();
          return response()->json(['code' => 13, 'info' => 'Error Validación.', 'error' => $error], 400);
        }
      }else{
        return response()->json(['code' => 401,'info'=>'Not allowed.'], 401);
      }
    }
}
