<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\HomeController as HomeController;
use App\Models\BlogPost as BlogPost;



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

Route::get('/','HomeController@home')->name('home');
Route::get('/contact','HomeController@contact')->name('contact');
//Route::get('/blog-post/{id}/{welcome?}','HomeController@blogpost')->name('blog-post');
Route::resource('/posts','PostController')->only(['index','show','create','store']);

/*
Route::get('/contact', function(){
    return view('contact');
});
*/
