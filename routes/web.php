<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/bank-account/create', 'BankAccountController@create');



Route::post('/admin/login', 'BankAccountController@processAdminLogin');
Route::post('/admin/balance/add', 'BankAccountController@addBalance');
Route::get('/admin/dashboard', 'BankAccountController@adminDashboard');


Route::get('/send-money', 'BankAccountController@sendMoney');