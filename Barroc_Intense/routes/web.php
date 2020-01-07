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
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('finance', 'FinanceController');

Route::resource('maintenance', 'maintenanceController');

Route::resource('sales', 'SalesController');

Route::get('/sendemail', 'SendEmailController@index');

Route::post('/sendemail/send', 'SendEmailController@send');

Route::resource('quotations', 'QuotationsController');

Route::resource('Company', 'CompanyController');

Route::post('/bkrUpdate',array('as'=>'BKR','uses'=>'CompanyController@ChangeMultiple'));

Route::resource('product', 'ProductController');

Route::resource('customer', 'customerController');

Route::resource('notes', 'NotesController');
//Route::get('/', 'SearchController@search');

Route::resource('head-maintenance', 'headmaintenanceController');


