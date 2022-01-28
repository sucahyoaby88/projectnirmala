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

Route::get('home/', 'HomeController@index');

Route::get('login/', 'LoginController@login');
Route::post('login/cek', 'LoginController@cek');
Route::get('logout/', 'LoginController@logout');

Route::get('form-request/', 'MessageController@form');
Route::post('sendrequest/', 'MessageController@store');

Route::group(['middleware' => 'cek_login'], function(){

//HOME    
Route::get('dashboard/', 'HomeController@dbhome');
Route::get('dbhome/', 'HomeController@dbhome');
Route::get('/dbhome/create', 'HomeController@create');
Route::post('dbhome/', 'HomeController@store');
Route::get('dashboard/{home}/edit', 'HomeController@edit');
Route::post('dashboard/{home}/update', 'HomeController@update');

//TEAM
Route::get('dbteam/', 'TeamController@dbteam');
Route::get('/dbteam/create', 'TeamController@create');
Route::post('dbteam/', 'TeamController@store');
Route::get('dbteam/{team}/edit', 'TeamController@edit');
Route::post('dbteam/{team}/update', 'TeamController@update');
Route::get('dbteam/{team}/delete', 'TeamController@delete');

//PRODUCTS
Route::get('dbproduct/', 'ProductController@dbproduct');
Route::get('/dbproduct/create', 'ProductController@create');
Route::post('dbproduct/', 'ProductController@store');
Route::get('dbproduct/{product}/edit', 'ProductController@edit');
Route::post('dbproduct/{product}/update', 'ProductController@update');
Route::get('dbproduct/{product}/delete', 'ProductController@delete');

//ADMINS
Route::get('dbadmin/', 'AdminController@dbadmin');
Route::get('/dbadmin/create', 'AdminController@create');
Route::post('dbadmin/', 'AdminController@store');
Route::get('dbadmin/{admin}/edit', 'AdminController@edit');
Route::post('dbadmin/{admin}/update', 'AdminController@update');
Route::get('dbadmin/{admin}/delete', 'AdminController@delete');

//MESSAGES
Route::get('dbmessage/', 'MessageController@dbmessage');
Route::get('dbmessage/{message}/delete', 'MessageController@delete');

});


