<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class HomeController extends Controller
{
    function page(Request $request){
        $data=[
            ['name'=>'Rakib','email'=>'rakib@gmail.com'],
            ['name'=>'sifa','email'=>'sifa@gmail.com'],
            ['name'=>'Tony','email'=>'tony@gmail.com'],
            ['name'=>'john','email'=>'john@gmail.com'],
            ['name'=>'jonedoe','email'=>'jonedoe@gmail.com'],
            ['name'=>'hassan','email'=>'hassan@gmail.com'],
        ];
        return view('home',['users'=>$data]);
    }
}
