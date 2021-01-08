<?php

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

Route::namespace('Api')->group(function(){

    Route::prefix('auth')->group(function(){

        Route::post('login', 'AuthController@login');
        Route::post('refresh-token', 'AuthController@refreshToken');
        Route::post('signup', 'AuthController@signup');

    });

    Route::group([
        'middleware'=>'auth:api'
    ], function(){

        Route::get('user', 'AuthController@index');
        Route::post('logout', 'AuthController@logout');

    });

});
