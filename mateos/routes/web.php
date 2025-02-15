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

/*
Route::get('/', function () {
    return view('construction');
});
*/

Route::get('/', 'WebController@index')->name('home');
Route::get('/nosotros', 'WebController@aboutus')->name('aboutus');
Route::get('/contact', 'WebController@contact')->name('contact');
Route::get('/catalogo', 'WebController@catalog')->name('catalog');
Route::post('/contacto', 'WebController@send')->name('email.send');

Auth::routes(['register' => false]);

Route::middleware(['auth'])->group( function () {
  Route::get('/home', 'HomeController@home')->name('home_admin');
  Route::get('/admin', 'HomeController@index')->name('admin.index');
  Route::resource('products', 'ProductController');
  Route::resource('users', 'UserController')->middleware('admin');
});
