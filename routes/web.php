<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin/user-list', function () {
    return view('admin.userlist');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*
|--------------------------------------------------------------------------
| Admin Route Block
|--------------------------------------------------------------------------
*/

Route::group(['prefix'=>'admin', 'as'=>'admin.','namespace'=>'Admin','middleware'=>['auth','admin']],function(){
    Route::get('dashboard','DashboardController@index')->name('dashboard');
});

/*
|--------------------------------------------------------------------------
| End Admin Route Block
|--------------------------------------------------------------------------
*/





/*
|--------------------------------------------------------------------------
| User Route Block
|--------------------------------------------------------------------------
*/

Route::group(['prefix'=>'user', 'as'=>'user.','namespace'=>'User','middleware'=>['auth','user']],function(){
    Route::get('dashboard','DashboardController@index')->name('dashboard');
});

/*
|--------------------------------------------------------------------------
| End User Route Block
|--------------------------------------------------------------------------
*/

