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

Route::get('accounts/{id}', 'AccountController@showAccount');

Route::post('accounts', 'AccountController@create');

Route::put('accounts/{id}', 'AccountController@update');

Route::delete('accounts/{id}', 'AccountController@delete');

// Bloodbank Routes

