<?php

//use Illuminate\Support\Facades\Route;

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
| Login Routes
|--------------------------------------------------------------------------
*/

use Illuminate\Support\Facades\Route;
use function foo\func;

Route::prefix('auth')->group(function () {
    Route::middleware([])->group(function () {
        Route::post('/login', 'Auth\AuthController@login');
        Route::middleware(['auth:api', 'role:admin'])->post('/register', 'Auth\RegisterController@register');
        Route::post('/password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
        Route::post('/password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');
        Route::post('/complete-register', function () {

        })->name('register.complete');
    });

    Route::middleware('auth:api')->group(function () {
        Route::get('/logout', 'Auth\AuthController@logout');
    });
});

Route::middleware(['auth:api', 'role:admin'])->get('/user', 'UserController@show');
Route::middleware(['auth:api', 'role:admin'])->get('/users', 'UserController@index');
