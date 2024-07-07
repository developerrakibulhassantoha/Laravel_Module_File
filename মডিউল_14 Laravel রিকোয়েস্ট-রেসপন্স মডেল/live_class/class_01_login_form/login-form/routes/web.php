<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

Route::view('/loginform', 'froms.login');
Route::view('/form', 'froms.form')->name('form.get');
Route::view('/contact', 'froms.contact');

Route::post('/handleForm', [FormController::class, 'handleFormSubmission'])->name("handleform");
