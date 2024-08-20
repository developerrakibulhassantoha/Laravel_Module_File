<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/',[HomeController::class, 'page']);
Route::get('/home/{num1}/{num2}',[HomeController::class, 'page']);
