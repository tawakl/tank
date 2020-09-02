<?php

Route::group(['prefix' => 'testimonials'], function () {
    Route::get('/', '\App\Blog\Testimonials\Controllers\TestimonialsController@index')->name('testimonials');

    Route::get('/create', '\App\Blog\Testimonials\Controllers\TestimonialsController@create');
    Route::post('/create', '\App\Blog\Testimonials\Controllers\TestimonialsController@store');

    Route::get('/edit/{id}', '\App\Blog\Testimonials\Controllers\TestimonialsController@edit');
    Route::put('/edit/{id}', '\App\Blog\Testimonials\Controllers\TestimonialsController@update');

    //Route::get('/view/{id}', '\App\Blog\Options\Controllers\OptionsController@getView');
    Route::delete('/delete/{id}', '\App\Blog\Testimonials\Controllers\TestimonialsController@destroy')->name('testimonials.delete');
});
