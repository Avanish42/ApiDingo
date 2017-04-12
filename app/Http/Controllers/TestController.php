<?php

namespace App\Http\Controllers;

//use App\Providers\TestProvider;
use App\TestFolder\TestClass;
use Illuminate\Http\Request;
use App\TestFolder;

class TestController extends Controller
{
    //

    public function index(TestClass $testClass)
    {
        // \TestClass::index();
      //  $newtest= new TestClass();
        $testClass->index();
       // echo "test controlle";

    }

}
