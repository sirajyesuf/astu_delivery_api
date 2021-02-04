<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Bot\Account\UserController;



// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::prefix('/12345')->group(function(){

    Route::prefix('/account')->group(function(){

        Route::post('/register',[UserController::class,'store']);
        Route::get('/user/{telegram_user_id}',[UserController::class,'show']);


    });





});
