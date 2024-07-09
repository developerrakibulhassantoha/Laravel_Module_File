<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    function demoAction1(){
        return "Hello, my name is Rakib xyz123 param passing";
    }

    function demoAction2(){
        return "Hello, my name is Rakib";
    }
}

