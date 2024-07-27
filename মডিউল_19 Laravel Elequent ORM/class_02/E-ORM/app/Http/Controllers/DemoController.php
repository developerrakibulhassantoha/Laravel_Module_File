<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use App\Models\User;

class DemoController extends Controller
{
    function DemoAction()
    {
        $result = User::with(['Profile', 'Post'])->get();
        return $result;
    }
}
