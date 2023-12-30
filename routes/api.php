<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/user/{id?}/{name?}', function ($userId=1, $userName='Puja') {
    #return 'User Id is '.$userId.'. User name is '.$userName;
    return view('user.index',[
        'Id'=>$userId,
        'Name'=> $userName,
    ]);
 });
