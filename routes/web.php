<?php

use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/register', [RegistrationController::class, 'showForm']);
Route::post('/register', [RegistrationController::class, 'submitForm']);
Route::get('/home', [RegistrationController::class, 'homePage'])->name('home');