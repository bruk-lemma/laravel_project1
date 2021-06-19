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


/*Route::get('/about', function(){
  return view('about');
});
*/

//Route::get('/','usercontroller@index');
/*Route::get('/question','questioncontroller@index');
Route::get('/answer','answercontroller@index');*/

//Route::resource('students','usercontroller');
/*Route::resource('question','questioncontroller');
Route::resource('answer','answercontroller');*/
