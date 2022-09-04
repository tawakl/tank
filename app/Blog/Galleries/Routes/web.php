<?php

Route::group(['prefix' => 'galleries'], function () {
    Route::get('/', '\App\Blog\Galleries\Controllers\GalleriesController@getIndex')->name('galleries');

    Route::get('/create', '\App\Blog\Galleries\Controllers\GalleriesController@getCreate');
    Route::post('/create', '\App\Blog\Galleries\Controllers\GalleriesController@postCreate');


    Route::get('/edit/{id}', '\App\Blog\Galleries\Controllers\GalleriesController@getEdit');
    Route::put('/edit/{id}', '\App\Blog\Galleries\Controllers\GalleriesController@postEdit');

    Route::delete('/delete/{id}', '\App\Blog\Galleries\Controllers\GalleriesController@getDelete')->name('galleries.delete');
});
