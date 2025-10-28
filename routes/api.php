<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});

//Route::post('/login', [AuthController::class, 'login']);
//Route::post('/register', [AuthController::class, 'register']);
//Route::post('/refresh', [AuthController::class, 'refreshToken']);
//
//Route::group(['middleware' => ['auth:api']], function () {
//    Route::get('/me', [AuthController::class, 'me']);
//    Route::post('/logout', [AuthController::class, 'logout']);
//});

Route::post('/login', ['as'=>'login', AuthController::class, 'loginUser']);
Route::post('/register', [AuthController::class, 'createUser']);

Route::group(['middleware' => ['auth:sanctum']], function(){
    Route::post('/logout',[AuthController::class,'logout'])/*->middleware('restrictRole:guest')*/;
});

//Route::middleware('auth')->group(function () {
//    Route::post('/chirps', [ChirpController::class, 'store']);
//});
