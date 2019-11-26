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

Route::middleware(['auth:api'])->group(function () {
    Route::apiResource('projects', 'ProjectController');
    Route::apiResource('courses', 'CourseController');
    Route::apiResource('students', 'StudentController');
    Route::apiResource('grades', 'GradeController');
    Route::apiResource('users', 'UserController')->except(['store']);
    Route::get('/grades/{grade}/students/search', 'GradeStudentController@searchNotIn');
    Route::apiResource('grades.students', 'GradeStudentController')->except(['show', 'update']);
    Route::apiResource('lessons', 'LessonController')->except(['all']);

    Route::get('teachers', 'TeacherController@index');
    Route::get('teachers/{id}', 'TeacherController@show');

    // Stats
    Route::get('/stats', 'StatsController@index');
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
    });

    Route::middleware('auth:api')->group(function () {
        Route::get('/logout', 'AuthController@logout');
    });
});

Route::middleware(['auth:api'])->get('/user', 'UserController@authUser');
Route::middleware(['auth:api'])->get('/users', 'UserController@index');
