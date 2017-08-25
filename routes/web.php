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
    // Software Settings
    Route::group(['prefix' => 'settings', 'namespace' => 'Settings'], function () {
        Route::resource('/users', 'UsersController', ['as' => 'settings']);
        Route::resource('/roles', 'RolesController', ['as' => 'settings']);
        Route::resource('/projects', 'ProjectsController', ['as' => 'settings']);
    });
});
