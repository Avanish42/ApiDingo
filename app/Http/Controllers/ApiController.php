<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class ApiController extends Controller
{
    //
    public function create()
    {
        //dd("i m create");
        return User::all();
    }
}
