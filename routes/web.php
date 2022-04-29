<?php

use Illuminate\Support\Facades\Route;
use App\Post;

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

//Route::get('/', function () {
  //  return view('welcome');
//});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', 'App\Http\Controllers\PostsController@index', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/','App\Http\Controllers\PagesController@index'); 
Route::resource('posts', 'App\Http\Controllers\PostsController');
 
   

