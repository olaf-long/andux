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

Route::get('register','UsersController@create')->name('register');
Route::post('register','UsersController@store')->name('register');

Route::get('login','SessionsController@create')->name('login');
Route::post('login','SessionsController@store')->name('login');

Route::group(['middleware'=>'auth'],function(){

    //退出
    Route::delete('logout','SessionsController@destroy')->name('logout');

    Route::get('/','OrdersController@index')->name('home');

    //用户信息
    Route::get('users','UsersController@index')->name('users');
    Route::get('users/{user}/edit','UsersController@edit')->name('users.edit');
    Route::post('users/{user}','UsersController@update')->name('users.update');

    //权限
    Route::get('permission','PermissionsController@index')->name('permissions');
    //角色
    Route::get('roles','RolesController@index')->name('roles');



});






