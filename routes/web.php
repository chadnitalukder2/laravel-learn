<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/greeting', function () {
    return 'Hello World';
});

Route::get('/user/{id}', function ($userId) {
    return 'User Id is'.$userId;
});

Route::get('/user/{id?}/{name?}', function ($userId=1, $userName='Puja') {
    return 'User Id is '.$userId.'. User name is '.$userName;
});