<?php

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

Route::get('/login', function () {
    return "This is custom login page";
});

Route::get('/register', function () {
    return "this is custom register page";
});

Route::get('/forgot-password', function () {
    return "this is custom forgot password page";
});


Route::get('/reset-password', function () {
    return "this is custom reset password page";
});
