<?php
Route::view('/', 'welcome');
Auth::routes();

Route::get('/login/admin', 'Auth\LoginController@showAdminLoginForm');
Route::get('/login/customer', 'Auth\LoginController@showCustomerLoginForm');
Route::get('/login/marketing', 'Auth\LoginController@showMarketingLoginForm');
Route::get('/login/support', 'Auth\LoginController@showSupportLoginForm');

Route::get('/register/admin', 'Auth\RegisterController@showAdminRegisterForm');
Route::get('/register/customer', 'Auth\RegisterController@showCustomerRegisterForm');
Route::get('/register/marketing', 'Auth\RegisterController@showMarketingRegisterForm');
Route::get('/register/support', 'Auth\RegisterController@showSupportRegisterForm');

Route::post('/login/admin', 'Auth\LoginController@adminLogin');
Route::post('/login/customer', 'Auth\LoginController@CustomerLogin');
Route::post('/login/marketing', 'Auth\LoginController@MarketingLogin');
Route::post('/login/support', 'Auth\LoginController@SupportLogin');


Route::post('/register/admin', 'Auth\RegisterController@createAdmin');
Route::post('/register/customer', 'Auth\RegisterController@createCustomer');
Route::post('/register/marketing', 'Auth\RegisterController@createMarketing');
Route::post('/register/support', 'Auth\RegisterController@createSupport');

Route::view('/home', 'home')->middleware('auth');
Route::view('/admin', 'admin');
Route::view('/customer', 'customer');
Route::view('/marketing', 'marketing');
Route::view('/support', 'support');