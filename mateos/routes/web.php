<?php

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
    return view('construction');
});

Route::get('/index', 'WebController@index')->name('home');
Route::get('/catalogo', 'WebController@catalog')->name('catalog');

Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home_admin');

Route::middleware(['auth'])->group( function () {
  Route::resource('products', 'ProductController');
  Route::resource('users', 'UserController')->middleware('admin');
});
