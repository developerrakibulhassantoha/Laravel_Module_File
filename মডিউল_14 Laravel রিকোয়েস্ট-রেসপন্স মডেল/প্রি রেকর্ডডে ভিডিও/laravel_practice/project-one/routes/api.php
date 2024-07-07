<?php

use App\Http\Controllers\FromDataController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/rakib',[FromDataController::class,'actionFrom']);



