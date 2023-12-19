<?php

use App\Http\Controllers\BookDescriptionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::prefix("v1")->group(function () {
    Route::apiResource("books", BookDescriptionController::class);
});

Route::post('auth/Register', \App\Http\Controllers\Api\Auth\RegisterController::class);
Route::get('auth/Register', '\App\Http\Controllers\Api\Auth\RegisterController@getAllUsers');
