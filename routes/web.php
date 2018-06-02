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
    return view('templates.template');
});

Route::get('/home',['as'=>'home', 'uses'=>'HomeController@home']);
Route::get('/crud',['as'=>'crud', 'uses'=>'HomeController@crud']);
Route::post('/create',['as'=>'create', 'uses'=>'HomeController@create']);

Route::get('/data',['as'=>'data', 'uses'=>'DataController@index']);
Route::post('/creates',['as'=>'creates', 'uses'=>'DataController@creates']);
Route::get('/edit/{id}',['as'=>'edit', 'uses'=>'DataController@edit']);
Route::post('/update/{id}',['as'=>'update', 'uses'=>'DataController@update']);
Route::post('/delete/',['as'=>'delete', 'uses'=>'DataController@delete']);

Route::get('/datatabel', ['as'=>'datatabel','uses'=>'DataController@bookingData']);
Route::get('/datatabel-data', ['as'=>'datatabel-data','uses'=>'DataController@bookingData']);
