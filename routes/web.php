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
    return view('welcome');
});
Route::get('/voyage', function () {
    return view('voyages');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/create', function () {
    return view('create');
});
Route::group(['prefix' => 'admin'], function() {
   Route::get('voyages/{id}', 'VoyageController@showVoyage');
   Route::get('voyages', 'VoyageController@create');
   Route::post('voyages/storage', 'VoyageController@store');
});
Route::get('/hotels', 'VoyageController@index');

Route::get('/hotels/{id?}', 'VoyageController@show');

Route::resource('voyages', 'VoyageController');
Route::resource('comments', 'CommentController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
