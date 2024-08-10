<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\LoginController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!!
|
*/

Route::get('/clear', function () {
    \Illuminate\Support\Facades\Artisan::call('config:clear');
});
Route::get('/cache', function () {
    \Illuminate\Support\Facades\Artisan::call('config:cache');
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Front page
Route::get('/', [UserController::class, 'home'])->name('login');
Route::group(['prefix' => 'user'], function () {
    Route::middleware('auth:user')->group(function () {
        Route::get('/dashboard', [UserController::class, 'dashboard']);
        Route::post('/submit-request', [UserController::class, 'submitrequest']);
        Route::get('/logout', [UserController::class, 'logout']);
        
    });
});