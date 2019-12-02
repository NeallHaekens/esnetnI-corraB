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

Route::resource('maintenance', 'MaintenanceController');

Route::resource('sales', 'SalesController');

Route::resource('supplier', 'SupplierController');

Route::get('/sendemail', 'SendEmailController@index');

Route::post('/sendemail/send', 'SendEmailController@send');

Route::resource('quotations', 'QuotationsController');

Route::resource('offer', 'OfferController');

Route::resource('product', 'ProductController');

Route::resource('customer', 'customerController');


/*--------------------------------------------------------------------------------------------------------------------------------*/
Route::get('/Admin', function () {

})->middleware('auth','role:1');

Route::get('/CEO', function () {

})->middleware('auth','role:2');

Route::get('/finance', function () {

})->middleware('auth','role:3');

Route::get('/supplier', function () {

})->middleware('auth','role:4');

Route::get('/sales', function () {

})->middleware('auth','role:5');

Route::get('/maintenance', function () {

})->middleware('auth','role:6');

//Route::get('/customer', function () {
//
//})->middleware('auth','role:7');
