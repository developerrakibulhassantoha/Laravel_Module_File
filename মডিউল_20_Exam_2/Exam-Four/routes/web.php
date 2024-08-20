<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/contacts',function(){
//     return view('show');
// });

Route::get('/contacts', [ContactController::class, 'index'])->name('contacts.index');
 
// Route::get('/contacts', [ContactController::class, 'index']);
//Route::get('/contacts/create', [ContactController::class, 'create'])->name('contacts.create');

Route::get('/contacts/create', [ContactController::class, 'create']);
Route::post('/contacts/create', [ContactController::class, 'store']);
Route::get('/contacts/show/{id}',[ContactController::class,'show']);
Route::get('/contacts/{id}',[ContactController::class,'edit']);
Route::get('/search',[ContactController::class,'search']);
Route::put('/contacts/{id}',[ContactController::class,'update']);
Route::get('/contacts/{id}/delete',[ContactController::class,'destroy']);

