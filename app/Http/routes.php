<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['middlewareGroups' => 'web'], function () {

    /* Access all users */
    Route::get('/', 'LoginController@index');

    /* Authorization */
    Route::auth();

    /* Access users with user permissions */
    Route::group(['middleware' => ['permission:user']], function() {
        /* Administration user routes */
        Route::resource('users', 'UserController');
    });

});
