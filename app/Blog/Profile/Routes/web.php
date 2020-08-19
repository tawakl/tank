<?php

Route::group(['prefix' => 'profile'], function () {
    Route::get('edit/', '\App\Blog\Profile\Controllers\ProfileController@getEdit')->name('profile.get.edit');
    Route::post('edit/', '\App\Blog\Profile\Controllers\ProfileController@postEdit')->name('profile.post.edit');

    Route::get('/logout', '\App\Blog\Profile\Controllers\ProfileController@getLogout')->name('profile.get.logout');
});
