<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;

Route::post('/form-submit', function (Request $request) {

    $email = $request->input('email');

    if ($email) {
        return response()->json([
            'status' => 'success',
            'message' => 'Form submitted successfully.',
            'email' => $email
        ]);
    } else {

        return response()->json([
            'status' => 'failed',
            'message' => 'Form submission failed.'
        ]);
    }
});



Route::get('/user-agent', function (Request $request) {
    // Retrieve the 'User-Agent' header from the request
    $userAgent = $request->header('User-Agent');

    // Return the $userAgent in the response
    return response()->json([
        'userAgent' => $userAgent
    ]);
});
