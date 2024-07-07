<?php

use App\Http\Controllers\FromDataController;
use App\Http\Controllers\UploadFileController;
use GuzzleHttp\Psr7\UploadedFile;
use Illuminate\Support\Facades\Route;

Route::post('/hi', [FromDataController::class,'actionFrom']);
Route::post('/hello', [UploadFileController::class,'actionFrom']);
