<?php

use Illuminate\Http\Request;
use App\Http\Controllers\Api\UserController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Route::get('getUser',function(Request $request){
//    return 123;
//});




Route::get('getUser',[UserController::class,'getUser']);
//Route::post('addUser',[UserController::class,'addUser']);
Route::middleware([''])->post('addUser',[UserController::class,'addUser']);

Route::delete('delUser',[UserController::class,'delUser']);
Route::put('updateUser',[UserController::class,'updateUser']);
