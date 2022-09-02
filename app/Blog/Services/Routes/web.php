<?php

Route::group(['prefix' => 'services'], function () {
    Route::get('/', '\App\Blog\Services\Controllers\ServicesController@getIndex')->name('services');

    Route::get('/create', '\App\Blog\Services\Controllers\ServicesController@getCreate');
    Route::post('/create', '\App\Blog\Services\Controllers\ServicesController@postCreate');

    Route::get('/edit/{id}', '\App\Blog\Services\Controllers\ServicesController@getEdit');
    Route::put('/edit/{id}', '\App\Blog\Services\Controllers\ServicesController@postEdit');

    Route::get('/{id}', '\App\Blog\Services\Controllers\ServicesController@show');
    Route::delete('/delete/{id}', '\App\Blog\Services\Controllers\ServicesController@getDelete')->name('services.delete');
});
