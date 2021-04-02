<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\PostController as PostV1;
use App\Http\Controllers\Api\V2\PostController as PostV2;

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

Route::apiResource('v1/post', PostV1::class)
    ->only(['index', 'show', 'destroy'])
    ->middleware('auth:sanctum');;


Route::apiResource('v2/post', PostV2::class)
    ->only(['index', 'show'])
    ->middleware('auth:sanctum');
Route::post('login', [
    App\Http\Controllers\Api\LoginController::class,
    'login'
]);