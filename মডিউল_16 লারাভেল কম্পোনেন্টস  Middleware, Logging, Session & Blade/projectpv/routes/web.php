<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoControler;
use App\Http\Controllers\ResourseController;
use App\Http\Controllers\SingleActionController;
use App\Http\Middleware\DemoMiddleware;

Route::get('/hello', [DemoControler::class, 'DemoAction']);

Route::get('/single',SingleActionController::class);

Route::resource('photo',ResourseController::class);
