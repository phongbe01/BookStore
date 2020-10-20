<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth'], 'namespace' => 'Admin', 'prefix' => 'admin/management'], function () {
    Route::get('/', 'ManagementController@index')->name('management.index');

    // UserController
    Route::post('/users/search', 'UserController@searchByCode')->name('users.search');
    Route::get('/users/storee', 'UserController@storee')->name('users.storee');
    Route::resource('/users', 'UserController');

});
