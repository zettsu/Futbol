<?php
namespace Futbol\Policies;
use Futbol\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Auth;
use Futbol\Models\Role;


class ModelPolicy {

    use HandlesAuthorization;
    

    public function dash(User $user) {
        return $this->is_admin($user);
    }


    //Deberia ir en el Modelo o una clase de Control
    private function is_admin(User $user) {
      $role = Role::find($user->id);
      $is_admin = false;

      if($role->name == "common") {
        $is_admin = true;
      }

      return $is_admin;
    }


    private function actions(User $user){
      $user_role = Role::find($user->id);
      $actions = json_decode($user_role->actions);
    }


    public function createRole(User $user){
      $user_role = Role::find($user->id);
      $actions = json_decode($user_role->name);

      return true;
    }

    public function createUser(User $user){
      $user_role = Role::find($user->id);
      $actions = json_decode($user_role->name);

      return false;
    }

    /*public function edit(User $auth_user, User $user)
    {
        return hell_has_skill_or_more($user, 'Admin') || $auth_user->id === $user->id;
    }
    public function update(User $auth_user, User $user)
    {
        return hell_has_skill_or_more($user, 'Admin') || $auth_user->id === $user->id;
    }
    public function updatePassword(User $auth_user, User $user)
    {
        return $auth_user->id === $user->id;
    }
    public function updateEmail(User $auth_user, User $user)
    {
        return $auth_user->id === $user->id;
    }
    public function updateRole(User $user)
    {
        return hell_has_skill_or_more($user, 'Admin');
    }*/
}
