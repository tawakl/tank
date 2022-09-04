<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', '\App\Blog\Front\Controllers\FrontController@getIndex')->name('front');
Route::get('/all-posts', '\App\Blog\Front\Controllers\FrontController@all')->name('posts.all');
Route::get('/post/{id}', '\App\Blog\Front\Controllers\FrontController@showPost')->name('posts.show');
Route::get('/contact', '\App\Blog\Front\Controllers\FrontController@contact')->name('contact');
Route::get('/about', '\App\Blog\Front\Controllers\FrontController@about')->name('about');
Route::get('/portfolios', '\App\Blog\Front\Controllers\FrontController@portfolios')->name('portfolios');
Route::get('/portfolios/{id}', '\App\Blog\Front\Controllers\FrontController@showPortfolios')->name('portfolios.show');
Route::get('/portfolio-grid-portrait-mode', '\App\Blog\Front\Controllers\FrontController@portfolioGrid')->name('portfolio-grid');
Route::get('/service/{id}', '\App\Blog\Front\Controllers\FrontController@showService')->name('service.show');






Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {
    require base_path('app/Blog/Users/Routes/web.php');
    require base_path('app/Blog/Categories/Routes/web.php');
    require base_path('app/Blog/Services/Routes/web.php');
    require base_path('app/Blog/Posts/Routes/web.php');
    require base_path('app/Blog/Tags/Routes/web.php');
    require base_path('app/Blog/Profile/Routes/web.php');
    require base_path('app/Blog/Testimonials/Routes/web.php');
    require base_path('app/Blog/Galleries/Routes/web.php');
    require base_path('app/Blog/Projects/Routes/web.php');
    Route::resource('comments', 'CommentsController');
    Route::resource('contacts', 'ContactController');
    Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
        \UniSharp\LaravelFilemanager\Lfm::routes();
    });

});



