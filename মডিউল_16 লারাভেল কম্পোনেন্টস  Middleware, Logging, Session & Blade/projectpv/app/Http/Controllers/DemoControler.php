<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Middleware\DemoMiddleware;

class DemoControler extends Controller
{
    function __construct(){
        $this->middleware('demo');

    }
    function DemoAction(Request $request):array
    {
        return $request->header();
    }

}
