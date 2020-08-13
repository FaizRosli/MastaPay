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
/////////////////////////////////////////// ADMIN ROUTE  /////////////////////////////////////////////
Route::get('/Admin/Affiliate','Admin\AffiliateController@index')->middleware(['auth','verified','Expired']);
Route::post('/Admin/Affiliate/Create','Admin\AffiliateController@create')->middleware(['auth','verified','Expired']);
Route::get('/Admin/Affiliate/{id}/Edit','Admin\AffiliateController@edit')->middleware(['auth','verified','Expired']);
Route::post('/Admin/Affiliate/{id}/Update','Admin\AffiliateController@update')->middleware(['auth','verified','Expired']);
Route::get('/Admin/Affiliate/{id}/Delete','Admin\AffiliateController@destroy')->middleware(['auth','verified','Expired']);
Route::get('/Admin/Affiliate/Add','Admin\AffiliateController@store')->middleware(['auth','verified','Expired']);

//dropshipper
Route::get('/Admin/Dropship','Admin\DropshipController@index')->middleware(['auth','verified','Expired']);
Route::get('/Admin/Dropship/Add','Admin\DropshipController@store')->middleware(['auth','verified','Expired']);
Route::post('/Admin/Dropship/Create','Admin\DropshipController@create')->middleware(['auth','verified','Expired']);
Route::get('/Admin/Dropship/{id}/Edit','Admin\DropshipController@edit')->middleware(['auth','verified','Expired']);
Route::post('/Admin/Dropship/{id}/Update','Admin\DropshipController@update')->middleware(['auth','verified','Expired']);
Route::get('/Admin/Dropship/{id}/Delete','Admin\DropshipController@destroy')->middleware(['auth','verified','Expired']);

//customer
Route::get('/Admin/Customer','Admin\CustomerController@index')->middleware(['auth','verified','Expired']);
Route::post('/Admin/Customer/Create','Admin\CustomerController@create')->middleware(['auth','verified','Expired']);
Route::get('/Admin/Customer/{id}/Edit','Admin\CustomerController@edit')->middleware(['auth','verified','Expired']);
Route::post('/Admin/Customer/{id}/Update','Admin\CustomerController@update')->middleware(['auth','verified','Expired']);
Route::get('/Admin/Customer/{id}/Delete','Admin\CustomerController@destroy')->middleware(['auth','verified','Expired']);

//product
Route::get('/Admin/product','Admin\productController@index')->middleware(['auth', 'verified','Expired']);
Route::post('/Admin/product/create','Admin\productController@create')->middleware(['auth','verified','Expired']);
Route::get('/Admin/product/{id}/Edit','Admin\productController@edit')->middleware(['auth','verified','Expired']);
Route::post('/Admin/product/{id}/update','Admin\productController@update')->middleware(['auth','verified','Expired']);
Route::get('/Admin/product/{id}/Delete','Admin\productController@destroy')->middleware(['auth','verified','Expired']);
Route::get('/Admin/product/Add','Admin\productController@store')->middleware(['auth','verified','Expired']);


//PagesProduct
Route::get('ProductPage/{id}','Admin\PagesController@indexStokist')->middleware(['Link_Expired']);
Route::get('ProductPage/{id}/{product_id}/detail','Admin\PagesController@indexDetail')->middleware(['Link_Expired']);
Route::get('ProductPage/{id}/{product_id}/invoice','Admin\PagesController@indexInvoice')->middleware(['Link_Expired']);
Route::get('ProductPage/{id}/{product_id}/cart','Admin\PagesController@indexCart')->middleware(['Link_Expired']);
Route::get('ProductPage/{id}/{product_id}/checkout','Admin\PagesController@indexCheckout')->middleware(['Link_Expired']);



//profile
Route::get('/Admin/Profile','Admin\ProfileController@index')->middleware(['auth', 'verified','Expired']);
Route::get('/Admin/Profile/Edit','Admin\ProfileController@edit')->middleware(['auth', 'verified','Expired']);
Route::get('/home', 'HomeController@index')->name('home')->middleware(['auth', 'verified','Expired']); 

Route::get('/logout','Auth\LoginController@logout')->middleware(['auth','verified']);

/////////////////////////////////// END ADMIN ROUTE /////////////////////////////////////////////////////////


////////////////////////////////////////// Dropship route //////////////////////////////////////////////////

Route::get('/Dropship/{id}/Register','Dropship\Auth\RegisterController@ShowRegisterDropshipForm')->middleware('Link_Expired');
Route::post('/Dropship/Register','Dropship\Auth\RegisterController@register');
Route::get('/Dropship/Login', 'Dropship\Auth\LoginController@ShowLoginForm');
Route::get('/Dropship/password/reset','Dropship\Auth\ForgotPasswordController@showLinkRequestForm');
Route::post('/Dropship/password/email','Dropship\Auth\ForgotPasswordController@sendResetLinkEmail');
Route::get('/Dropship/password/reset/{token}','Dropship\Auth\ResetPasswordController@showResetForm');
Route::post('/Dropship/password/reset','Dropship\Auth\ResetPasswordController@reset');
Route::post('/Dropship/Login', 'Dropship\Auth\LoginController@login');
Route::get('/Dropship/Logout', 'Dropship\Auth\LoginController@logout');

Route::get('/Dropship/Home', 'Dropship\HomeController@index');
Route::get('/Dropship/ListBusiness', 'Dropship\BusinessController@showList');
Route::get('/Dropship/AddBusiness', 'Dropship\BusinessController@showAddBusinessForm');
Route::post('/Dropship/AddBusiness', 'Dropship\BusinessController@addBusiness');


/////////////////////////////////////// END DROPSHIP ROUTE /////////////////////////////////////////////////


/////////////////////////////////////// SYSTEM ROUTE /////////////////////////////////////////////////
Route::get('/System/Register','System\Auth\RegisterController@showRegisterForm');
Route::post('/System/Register','System\Auth\RegisterController@register');
Route::get('/System/Login', 'System\Auth\LoginController@ShowLoginForm');
Route::get('/System/password/reset','System\Auth\ForgotPasswordController@showLinkRequestForm');
Route::post('/System/password/email','System\Auth\ForgotPasswordController@sendResetLinkEmail');
Route::get('/System/password/reset/{token}','System\Auth\ResetPasswordController@showResetForm');
Route::post('/System/password/reset','System\Auth\ResetPasswordController@reset');
Route::post('/System/Login', 'System\Auth\LoginController@login');
Route::get('/System/Logout', 'System\Auth\LoginController@logout');

Route::get('/System/Home', 'System\HomeController@index');
Route::get('/System/{id}/Edit', 'System\HomeController@showEditForm');
Route::post('/System/{id}/Update', 'System\HomeController@update');
Route::get('/System/UpdateExpiredUser', 'System\HomeController@UpdateExpiredUser');

/////////////////////////////////////// END SYSTEM ROUTE /////////////////////////////////////////////////



Auth::routes(['verify'=>true]);




