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

//Route::get('/customer',[\App\Http\Controllers\CustomerController::class,'index']);


//version
Route::prefix('v1')->group(function (){
    Route::resource('customer',\App\Http\Controllers\Api\v1\CustomerController::class)
        ->only('index','show','update','delete','store');
    Route::resource('category',\App\Http\Controllers\Api\v1\CategoryPostController::class);
    Route::resource('post',\App\Http\Controllers\Api\v1\PostController::class);

});

Route::prefix('v2')->group(function (){
    Route::resource('customer',\App\Http\Controllers\Api\v2\CustomerController::class)
        ->only('index','show','update','delete','store');
});
