<?php

namespace App\Http\Controllers;

use Dotenv\Util\Str;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\Cast\String_;

class FromDataController extends Controller
{
    function actionFrom(Request $request){
         //return $request->input();
        //dd($request->all());

        $photoFile=$request->file(key:'photo');
        $FileSize=filesize($photoFile);
        $FileType=filetype($photoFile);
        $FileOraginalName=$photoFile->getClientOriginalName();
        $FileTempName=$photoFile->getFilename();
        $FileExtension=$photoFile->extension();

        return array(
            "FileSize"=>$FileSize,
            "FileType"=>$FileType,
            "FileOraginalName"=>$FileOraginalName,
            "FileTempName"=>$FileTempName,
            "FileExtension"=>$FileExtension

        );
    }
}
