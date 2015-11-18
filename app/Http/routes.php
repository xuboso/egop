<?php

/** admin routes */
Route::group(['domain' => 'admin.egop.local', 'namespace' => 'Admin'], function(){
    Route::get('/', ['as' => 'home.index', 'uses' => 'homeController@index']);
});


/**
 * homepage route
 */
Route::get('/', ['as' => 'index', 'uses' => 'SiteController@index']);