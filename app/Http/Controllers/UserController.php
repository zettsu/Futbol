<?php

namespace Futbol\Http\Controllers;

use Futbol\User;
use Futbol\Models\Profile;
use Futbol\Models\AsignedRoles;
use Futbol\Models\Role;
use Validator;
use Auth;
use Futbol\Http\Controllers\Controller;
//use Request;
use Illuminate\Support\Facades\Request as FacadeRequest;
use Illuminate\Http\Request as HttpRequest;


class UserController extends Controller
{

    //protected $redirectTo = '/backend';
    protected $request;

    public function __construct(HttpRequest $request) {
        $this->middleware('auth');
        $this->request = $request;
    }

    public function view(){
      return view('auth.create_usersys');
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

    protected function create() {
       $data = $this->request->all();

       if($this->is_admin()){
         $validate =  Validator::make($data, [
             'name' => 'required|max:255',
             'email' => 'required|email|max:255|unique:users',
             'password' => 'required|min:6|confirmed',
         ]);

         if(!$validate->fails()){
           $user = User::create([
               'name' => $data['name'],
               'email' => $data['email'],
               'password' => bcrypt($data['password']),
           ]);

           $asignedRole = new AsignedRoles;
           $asignedRole->user_id = $user->id;
           $asignedRole->role_id = 0;
           $asignedRole->save();

           $profile = new Profile;

           $profile->user_id = $user->id ;
           $profile->save();


           return response()->json(['code' => 0,'info'=>'Success.'], 200);
         }else{
           return response()->json(['code' => 13,'info'=>'Ya existe el usuario'], 400);
         }
       }else{
         return response()->json(['code' => 401,'info'=>'Not allowed.'], 401);
       }
    }
}
