<?php

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

/** admin routes */
Route::group(['domain' => 'admin.egop.local', 'namespace' => 'Admin', 'middleware' => ['auth', 'role:admin']], function(){
    Route::get('/', ['as' => 'home.index', 'uses' => 'homeController@index']);
});


/**
 * homepage route
 */
Route::get('/', ['as' => 'index', 'uses' => 'SiteController@index']);