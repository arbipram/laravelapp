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

Route::get('/admin/login','Admin\LoginController@index');
Route::get('/admin/logout','Admin\LoginController@logout');
Route::post('/admin/login/auth','Admin\LoginController@auth');

Route::get('/input-guestbook','GuestbookController@index');
Route::post('/input-guestbook/store','GuestbookController@store');

Route::middleware(['Logged'])->group(function() {
	Route::get('/admin/guestbook','Admin\GuestbookController@index');
	Route::get('/admin/guestbook/create','Admin\GuestbookController@create');
	Route::post('/admin/guestbook/store','Admin\GuestbookController@store');
	Route::get('/admin/guestbook/edit/{id}','Admin\GuestbookController@edit');
	Route::post('/admin/guestbook/update/{id}','Admin\GuestbookController@update');
	Route::get('/admin/guestbook/delete/{id}','Admin\GuestbookController@delete');
});
