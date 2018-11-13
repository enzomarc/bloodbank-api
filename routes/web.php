<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

// Account Routes

Route::get('accounts', 'AccountController@showAll');

Route::get('accounts/{id}', 'AccountController@show');

Route::post('accounts', 'AccountController@create');

Route::put('accounts/{id}', 'AccountController@update');

Route::delete('accounts/{id}', 'AccountController@delete');

// Bloodbank Routes

Route::get('bloodbanks', 'BloodbankController@showAll');

Route::get('bloodbanks/{ref}', 'BloodbankController@show');

Route::post('bloodbanks', 'BloodbankController@create');

Route::put('bloodbanks/{ref}', 'BloodbankController@update');

Route::delete('bloodbanks/{ref}', 'BloodbankController@delete');

// Donation Routes

Route::get('donations', 'DonationController@showAll');

Route::get('donations/{id}', 'DonationController@show');

Route::post('donations', 'DonationController@create');

Route::put('donations/{id}', 'DonationController@update');

Route::delete('donations/{id}', 'DonationController@delete');

// Hospital Routes

Route::get('hospitals', 'HospitalController@showAll');

Route::get('hospitals/{ref}', 'HospitalController@show');

Route::post('hospitals', 'HospitalController@create');

Route::put('hospitals/{ref}', 'HospitalController@update');

Route::delete('hospitals/{ref}', 'HospitalController@delete');

// Hospital Request Routes

Route::get('requests', 'HospitalRequestController@showAll');

Route::get('requests/{id}', 'HospitalRequestController@show');

Route::post('requests', 'HospitalRequestController@create');

Route::put('requests/{id}', 'HospitalRequestController@update');

Route::delete('requests/{id}', 'HospitalRequestController@delete');

// Purchases Routes

Route::get('purchases', 'PurchaseController@showAll');

Route::get('purchases/{id}', 'PurchaseController@show');

Route::post('purchases', 'PurchaseController@create');

Route::put('purchases/{id}', 'PurchaseController@update');

Route::delete('purchases/{id}', 'PurchaseController@delete');

// Sales Routes

Route::get('sales', 'SaleController@showAll');

Route::get('sales/{id}', 'SaleController@show');

Route::post('sales', 'SaleController@create');

Route::put('sales/{id}', 'SaleController@update');

Route::delete('sales/{id}', 'SaleController@delete');

// Request Routes

Route::get('seekers', 'RequestController@showAll');

Route::get('seekers/{id}', 'RequestController@show');

Route::post('seekers', 'RequestController@create');

Route::put('seekers/{id}', 'RequestController@update');

Route::delete('seekers/{id}', 'RequestController@delete');

// User Routes

Route::get('users', 'UserController@showAll');

Route::get('users/{id}', 'UserController@show');

Route::post('users', 'UserController@create');

Route::put('users/{id}', 'UserController@update');

Route::delete('users/{id}', 'UserController@delete');