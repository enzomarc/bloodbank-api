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