<?php

namespace App\Http\Controllers;

use App\Permission;
use App\Role;
use App\User;
use Dingo\Api\Http\Response;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    //this function attach user and role ids  in user_role tables
    public function attachUserRole($userId, $role)
    {
        $user= User::find($userId);
       // dd($user);

        $roleId=Role::where('name',$role)->first();

        $user->roles()->attach($roleId);

        return $user;

        //dd($roleId);

    }

    // return the role of user
    public function getRole($userId)
    {
       // dd($userId);
        return User::find($userId)->roles;
    }

    public function attachPermission(Request $req)
    {
        $perameters= $req->only('permissoon', 'roles');
           $role_pera=$perameters['roles'] ;
           $permison_pera=$perameters['permissoon'] ;

        $role=Role::where('name',$role_pera)->first();
        $permisson=Permission::where('name',$permison_pera)->first();


        $role->attachPermission($permisson);
        return $this->response->created();


    }

    /**
     * @param $rolePeram
     * @return mixed
     */
    public function getPermission($rolePeram)
    {
        $role= Role::where('name',$rolePeram)->first();

        return $role->perms;

    }

}
