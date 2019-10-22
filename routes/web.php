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
    return view('home');
});

Route::get('/layouts.added','AdminController@added');

Route::post('/layouts.added','AdminController@add');

Route::get('/','AdminController@vi');

Route::get('/home/{id}','AdminController@delete');
//send id that delete unice id
Route::get('/layouts/edit/{id}','AdminController@edit');

Route::post('/layouts/edit','AdminController@update');

Route::get('/layouts/master','AdminController@master');
