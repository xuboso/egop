<?php

/**
 * homepage route
 */
Route::get('/', ['as' => 'index', 'uses' => 'SiteController@index']);
