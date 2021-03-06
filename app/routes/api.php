<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::resource('/user', 'UserController', [
    'except' => ['edit', 'show', 'create']
]);
Route::get('user/{user}/companies', 'UserController@companies')->name('user.companies');


Route::resource('/company', 'CompanyController', [
    'except' => ['edit', 'show', 'create']
]);
Route::get('company/{company}/users', 'CompanyController@users')->name('company.users');