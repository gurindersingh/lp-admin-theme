<?php

/*=== Admin Pages ===*/
Route::get('/', ['as' => 'home', 'uses' => 'AdminPagesController@welcome']);
Route::get('home', ['uses' => 'AdminPagesController@welcome']);

Route::group(['prefix' => 'admin'], function() {
    Route::get('{adminPage}', ['as' => 'admin', 'uses' => 'AdminPagesController@adminPages']);
});