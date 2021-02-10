<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Bot\Account\UserController;
use App\Http\Controllers\Bot\Order\FoodMenuController;
use App\Http\Controllers\Bot\Order\HotelController;
use App\Http\Controllers\Bot\Order\OrderController;



// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::prefix('/12345')->group(function(){

    Route::prefix('/account')->group(function(){

        Route::post('/register',[UserController::class,'store']);
        Route::get('/user/{telegram_user_id}',[UserController::class,'show']);


    });

    Route::prefix('/foodmenu')->group(function(){
        Route::get('/',[FoodMenuController::class,'index']);
        Route::get('/{id}',[FoodMenuController::class,'show']);
        Route::get('/{id}/hotels',[FoodMenuController::class,'hotels']);
        Route::get('/{id}/{hotel_id}',[FoodMenuController::class,'hotel']);
        
    });

    Route::prefix('/hotels')->group(function(){
        Route::get('/',[HotelController::class,'index']);
        Route::get('/{id}',[HotelController::class,'show']);
        Route::get('/{id}/foodmenus',[HotelController::class,'foodmenus']);

    });

    Route::prefix('/order')->group(function(){
        Route::post('/store',[OrderController::class,'store']);

    });






});
