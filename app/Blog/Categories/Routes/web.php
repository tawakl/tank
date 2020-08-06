<?php

Route::group(['prefix' => 'categories'], function () {
    Route::get('/', '\App\Blog\Categories\Controllers\CategoriesController@getIndex')->name('categories');

    Route::get('/create', '\App\Blog\Categories\Controllers\CategoriesController@getCreate');
    Route::post('/create', '\App\Blog\Categories\Controllers\CategoriesController@postCreate');

    Route::get('/edit/{id}', '\App\Blog\Categories\Controllers\CategoriesController@getEdit');
    Route::put('/edit/{id}', '\App\Blog\Categories\Controllers\CategoriesController@postEdit');

    //Route::get('/view/{id}', '\App\Blog\Options\Controllers\OptionsController@getView');
    Route::delete('/delete/{id}', '\App\Blog\Categories\Controllers\CategoriesController@getDelete')->name('categories.delete');
});
