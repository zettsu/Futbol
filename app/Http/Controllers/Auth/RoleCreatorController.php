<?php

namespace Futbol\Http\Controllers\Auth;

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
      return view('auth.create_usersys');
    }

    protected function create(array $data)
    {
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);


        $asignedRole = new AsignedRoles;
        $asignedRole->user_id = $user->id;
        $asignedRole->role_id = $role_id;
        $asignedRole->save();

        $profile = new Profile;

        $profile->user_id = $user->id ;
        $profile->save();

        return $user;
    }
}
