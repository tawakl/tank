<?php

Route::group(['prefix' => 'users'], function () {
    Route::get('/', '\App\Blog\Users\Controllers\UsersController@getIndex')->name('users');
    Route::get('/create', '\App\Blog\Users\Controllers\UsersController@getCreate');
    Route::post('/create', '\App\Blog\Users\Controllers\UsersController@postCreate');
    Route::get('/edit/{id}', '\App\Blog\Users\Controllers\UsersController@getEdit');
    Route::put('/edit/{id}', '\App\Blog\Users\Controllers\UsersController@postEdit')->name('users.putUser');
    Route::get('/view/{id}', '\App\Blog\Users\Controllers\UsersController@getView')->name('users.view');
    Route::delete('/delete/{id}', '\App\Blog\Users\Controllers\UsersController@getDelete')->name('users.delete');
    Route::get('/logout', '\App\Blog\Users\Controllers\UsersController@getLogout')->name('profile.get.logout');



});
