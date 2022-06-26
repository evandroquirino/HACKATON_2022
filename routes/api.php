<?php

use App\Http\Controllers\Api\ClientController;
use App\Http\Controllers\Api\ClientNoSurveysController;
use App\Http\Controllers\Api\ClientSurveysController;
use App\Http\Controllers\Api\CompanyController;
use App\Http\Controllers\Api\ResponseController;
use App\Http\Controllers\Api\SurveyController;
use App\Http\Controllers\api\UserController;
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


Route::apiResource('surveys', SurveyController::class);
Route::apiResource('surveys.responses', UserSurveysResponseController::class)->only('index', 'show');
Route::apiResource('clients', ClientController::class);
Route::apiResource('clients.responses', ResponseController::class);

Route::get('clients/{id}/surveys', [ClientSurveysController::class, 'index']);
Route::get('clients/{id}/nosurveys', [ClientNoSurveysController::class, 'index']);
Route::get('responses', [ResponseController::class, 'responses']);

    