<?php

Route::group(['prefix' => 'projects'], function () {
    Route::get('/', '\App\Blog\Projects\Controllers\ProjectsController@getIndex')->name('projects');

    Route::get('/create', '\App\Blog\Projects\Controllers\ProjectsController@getCreate');
    Route::post('/create', '\App\Blog\Projects\Controllers\ProjectsController@postCreate');

    Route::get('/edit/{id}', '\App\Blog\Projects\Controllers\ProjectsController@getEdit');
    Route::put('/edit/{id}', '\App\Blog\Projects\Controllers\ProjectsController@postEdit');

    Route::delete('/delete/{id}', '\App\Blog\Projects\Controllers\ProjectsController@getDelete')->name('projects.delete');
});
