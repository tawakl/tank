<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {
    require base_path('app/Blog/Users/Routes/web.php');
    require base_path('app/Blog/Categories/Routes/web.php');
    require base_path('app/Blog/Posts/Routes/web.php');
    require base_path('app/Blog/Posts/Routes/web.php');
    require base_path('app/Blog/Tags/Routes/web.php');
    require base_path('app/Blog/Profile/Routes/web.php');


});



