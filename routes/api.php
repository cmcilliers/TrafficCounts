<?php

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\BusController;
use App\Http\Controllers\HeavyController;
use App\Http\Controllers\IntersectionController;
use App\Http\Controllers\MBTController;
use App\Http\Controllers\SurveyController;
use App\Http\Controllers\TotalController;
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

Route::post('/login', [AuthenticationController::class, 'login']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    Route::prefix('survey')->group(function () {
        Route::post('/create', [SurveyController::class, 'create']);
        Route::post('/list', [SurveyController::class, 'list']);
        Route::post('/delete/{id}', [SurveyController::class, 'delete']);
    });

    Route::prefix('intersection')->group(function () {
        Route::post('/create', [IntersectionController::class, 'create']);
        Route::post('/list', [IntersectionController::class, 'list']);
        Route::post('/find/{intersection_id}', [IntersectionController::class, 'find']);
        Route::post('/delete/{id}', [IntersectionController::class, 'delete']);
    });

    Route::prefix('total')->group(function () {
        Route::post('/create', [TotalController::class, 'create']);
    });

    Route::prefix('heavy')->group(function () {
        Route::post('/create', [HeavyController::class, 'create']);
    });

    Route::prefix('bus')->group(function () {
        Route::post('/create', [BusController::class, 'create']);
    });

    Route::prefix('mbt')->group(function () {
        Route::post('/create', [MBTController::class, 'create']);
    });
});
