<?php

Route::group(['prefix' => 'posts'], function () {
    Route::get('/', '\App\Blog\Posts\Controllers\PostsController@getIndex')->name('posts');

    Route::get('/create', '\App\Blog\Posts\Controllers\PostsController@getCreate');
    Route::post('/create', '\App\Blog\Posts\Controllers\PostsController@postCreate');

    Route::get('/post/{id}', '\App\Blog\Posts\Controllers\PostsController@show')->name('posts.show');

    Route::get('/all-posts', '\App\Blog\Posts\Controllers\PostsController@all')->name('posts.all');

    Route::get('/edit/{id}', '\App\Blog\Posts\Controllers\PostsController@getEdit');
    Route::put('/edit/{id}', '\App\Blog\Posts\Controllers\PostsController@postEdit');

    Route::delete('/delete/{id}', '\App\Blog\Posts\Controllers\PostsController@getDelete')->name('posts.delete');
});
