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

Route::resource('customers','CustomerController');
Route::resource('items','ItemController');
Route::resource('months','MonthController');
Route::resource('payments','PaymentController');
Route::resource('dashboards','DashboardController');
Route::get('/admin' ,'DashboardController@admin')->name('admin');
Route::get('/youtube' ,'DashboardController@youtube')->name('youtube');