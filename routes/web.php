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




Route::get('/','UserController@create');

Route::post('/user-page','UserController@store');
Route::get('/user-page','UserController@home');


Auth::routes(['verify' => true]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');




Route::get('/box', 'UserController@index');

Route::post('/box', 'UserController@fetch')->name('UserController.fetch');

Route::delete('front-page/{id}', 'UserController@delete');

Route::get('profile', function () {
  
})->middleware('verified');


Route::get('/front-page','UserController@check');


Route::get('/nav', 'UserController@navs');


Route::post('/my-page','UserController@file');


Route::get('/file', function () {
    return view('file');
});

Route::get('/my-page', function () {
    return view('my-page');
});




Route::get('/my-edit/{site}',['as' => 'my-edit', 'uses' => 'UserController@edit']);
Route::get('/box/{site}',['as' => 'box', 'uses' => 'UserController@update']);

Route::get('/my-join','UserController@myjoin');

Route::get('/my-login','UserController@first');

Route::post('/first-page','UserController@mylog');


Route::get('logout', 'UserController@logout');