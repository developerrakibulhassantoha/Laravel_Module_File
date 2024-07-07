<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadFileController extends Controller
{
    function actionFrom(Request $request){

        $photoFile=$request->file(key:'photo');

        $photoFile->storeAs('upload', $photoFile->getClientOriginalName());
        $photoFile->move('public_path', $photoFile->getClientOriginalName());

        return true;
    }
}
