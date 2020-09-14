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

// digitando /home vado alla pagina di login
Route::get('/home', 'HomeController@index')->name('home');


Route::prefix('admin') // prefix si trova prima dell'url es /quiprefix/post
    ->namespace('Admin') // sottocartella in cui si trova il controller
    ->middleware('auth') // in questo modo solo gli utenti loggati possono accedere alle route presenti in group
    ->name('admin.')
    ->group(function () {

        // tutte le route iniziano per /admin

        Route::resource('posts', 'PostController');

});

Route::get('/posts', 'PostController@index')->name('posts.index');
Route::get('/posts/{post}', 'PostController@show')->name('posts.show');
