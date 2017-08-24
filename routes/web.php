<?php

Route::get('/', function () {
    return redirect('login');
});

/**
 * Authentication Routes
 */
Route::group(['namespace' => 'Auth'], function () {
    Route::group(['middleware' => 'guest'], function () {
        Route::get('login', 'LoginController@showLoginForm')->name('login');
        Route::post('login', 'LoginController@login')->name('login');
    });
    Route::post('logout', 'LoginController@logout')->name('logout')->middleware('auth');
});

/**
 * Admin Routes
 */
Route::group(['namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/dashboard', 'DashboardController@index')->name('admin.dashboard');

    Route::resource('/users', 'UsersController');
    Route::resource('/roles', 'RolesController');
    Route::resource('/projects', 'ProjectsController');
});
