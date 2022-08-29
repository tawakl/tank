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






Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {
    require base_path('app/Blog/Users/Routes/web.php');
    require base_path('app/Blog/Categories/Routes/web.php');
    require base_path('app/Blog/Posts/Routes/web.php');
    require base_path('app/Blog/Posts/Routes/web.php');
    require base_path('app/Blog/Tags/Routes/web.php');
    require base_path('app/Blog/Profile/Routes/web.php');
    require base_path('app/Blog/Testimonials/Routes/web.php');
    Route::resource('comments', 'CommentsController');
    Route::resource('contacts', 'ContactController');

});



