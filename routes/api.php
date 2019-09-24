<?php

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

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/

Route::middleware(['auth:api', 'role:admin'])->group(function () {
    Route::apiResource('projects', 'ProjectController');
});


/*
|--------------------------------------------------------------------------
| Login Routes
|--------------------------------------------------------------------------
*/
Route::prefix('auth')->namespace('Auth')->group(function () {
    Route::middleware([])->group(function () {
        Route::post('/login', 'AuthController@login');
        Route::middleware(['auth:api', 'role:admin'])->post('/register', 'RegisterController@register');
        Route::post('/password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('password.email');
        Route::post('/password/reset', 'ResetPasswordController@reset')->name('password.update');
        Route::post('/complete-register', function () {

        })->name('register.complete');
    });

    Route::middleware('auth:api')->group(function () {
        Route::get('/logout', 'AuthController@logout');
    });
});

Route::middleware(['auth:api', 'role:admin'])->get('/user', 'UserController@show');
Route::middleware(['auth:api', 'role:admin'])->get('/users', 'UserController@index');
