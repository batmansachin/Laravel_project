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
Route::get('/','SiteController@home')->name('home');
//Route::get('/panels','SiteController@panels')->name('panels');
//Route::get('dashbord', 'DashbordController@index');
  //  Auth::routes();
  //Route::get('/home', 'HomeController@index')->name('home');
  //  Route::get('/about', 'HomeController@about')->name('about');
  //  Route::get('/logout', 'HomeController@getLogout')->name('logout');

//Route::get('/','SiteController@index')->name('index');
//Route::get('/','SiteController@index')->name('index');
//Route::get('panels', function () {
	
  //  return view('panels');
//});
