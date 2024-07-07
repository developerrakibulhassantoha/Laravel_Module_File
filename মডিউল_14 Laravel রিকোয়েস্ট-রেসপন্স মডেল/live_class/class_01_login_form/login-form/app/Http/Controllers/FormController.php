<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage as FacadesStorage;
use Storage;

class FormController extends Controller
{
    function handleFormSubmission(Request $request){
        $name=$request->input("name");
        $email=$request->input("email");

        return redirect(route("form.get"))->with("success", "Form Submitted Successfully");
        return redirect(route("form.get"))->with([
            "success"=>"Form Submitted Successfully",
            "name"=>$name,
            "email"=>$email,
            //"profile_picture"=>$path
        ]);
        // return redirect(route("form.get"))->withError("Wrong Data");


        /*request accepted method:->
        dd($request->all());
        return $request->input('email');
        return request()->input("email");
        */



        // $path = "";
        // if ($request->has("profile_picture")) {
        //     $file = $request->file('profile_picture');
        //     $name = $file->getClientOriginalName();
        //     //$file->store("uploads", "public");
        //     $uploadPath = $file->storeAs("uploads", $name, "public");
        //     $path = storage::url($uploadPath);
        // }

       /* data return with display
        return[
            "name"=>$name,
            "email"=>$email
        ];
*/





    }
}
