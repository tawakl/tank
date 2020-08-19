<?php

Route::group(['prefix' => 'users','middleware'=>'admin'], function () {
    Route::get('/', '\App\Blog\Users\Controllers\UsersController@getIndex')->name('users');
    Route::get('/create', '\App\Blog\Users\Controllers\UsersController@getCreate');
    Route::post('/create', '\App\Blog\Users\Controllers\UsersController@postCreate');
    Route::get('/edit/{id}', '\App\Blog\Users\Controllers\UsersController@getEdit');
    Route::put('/edit/{id}', '\App\Blog\Users\Controllers\UsersController@postEdit')->name('users.putUser');
    Route::get('/view/{id}', '\App\Blog\Users\Controllers\UsersController@getView')->name('users.view');
    Route::delete('/delete/{id}', '\App\Blog\Users\Controllers\UsersController@getDelete')->name('users.delete');
    Route::post('{user}/make-admin', '\App\Blog\Users\Controllers\UsersController@makeAdmin')->name('users.make-admin');
    Route::post('{user}/cancle-admin', '\App\Blog\Users\Controllers\UsersController@cancleAdmin')->name('users.cancle-admin');

});

Route::get('users/logout', '\App\Blog\Users\Controllers\UsersController@getLogout')->name('profile.get.logout');

