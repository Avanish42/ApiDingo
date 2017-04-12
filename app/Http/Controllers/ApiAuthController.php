<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Exceptions\JWTException;
//use Tymon\JWTAuth\JWTAuth;
use Tymon\JWTAuth\Facades\JWTAuth;
//use JWTAuth;


class ApiAuthController extends Controller
{
    //


    public function __construct()
    {
        $this->middleware('guest',['except'=> 'getLogout']);
    }


    public function authenticate(Request $request)

    {
        $credential =$request->only('email','password');



        try{
            if(!$token =JWTAuth::attempt($credential))
            {
                return $this->response->errorUnauthorized();
            }



        }
        catch ( JWTException $ex)
        {
            return $this->response->errorInternal();

        }
        return $this->response->array(compact('token'))->setStatuscode(200) ;


    }

    public function index()
    {
         return \App\User::all();

    }
    public function userById($id)

    {
        //$id=$request->only('id') ;
        //echo $id;
//        $data=\App\User::find($id);
//        dd($data);

        return \App\User::find($id);

    }
}