<?php

Route::group(['prefix' => 'tags'], function () {
    Route::get('/', '\App\Blog\Tags\Controllers\TagsController@getIndex')->name('tags');

    Route::get('/create', '\App\Blog\Tags\Controllers\TagsController@getCreate');
    Route::post('/create', '\App\Blog\Tags\Controllers\TagsController@postCreate');

    Route::get('/edit/{id}', '\App\Blog\Tags\Controllers\TagsController@getEdit');
    Route::put('/edit/{id}', '\App\Blog\Tags\Controllers\TagsController@postEdit');

    Route::delete('/delete/{id}', '\App\Blog\Tags\Controllers\TagsController@getDelete')->name('tags.delete');
});
