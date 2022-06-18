<?php

use App\Http\Controllers\Api\ClientController;
use App\Http\Controllers\Api\ResponseController;
use App\Http\Controllers\Api\SurveyController;
use App\Http\Controllers\Api\UserSurveysResponseController;
use App\Http\Controllers\Auth\Api\LoginController;
use App\Http\Controllers\Auth\Api\RegisterController;
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


Route::apiResource('user.surveys', SurveyController::class)->middleware('auth:sanctum');
Route::apiResource('user.surveys.responses', UserSurveysResponseController::class)->only('index', 'show')->middleware('auth:sanctum');
Route::apiResource('clients', ClientController::class);
Route::apiResource('clients.responses', ResponseController::class);
    
Route::prefix('auth')->group(function () {
    Route::post('login', [LoginController::class, 'login']);
    Route::post('logout', [LoginController::class, 'logout'])->middleware('auth:sanctum');
    Route::post('register', [RegisterController::class, 'register']);
});