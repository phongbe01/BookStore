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

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index')->name('home');

Route::get('/products/category/{categoryId}', 'ProductController@showByCategory')->name('products.listByCategory');
Route::resource('/products', 'ProductController');

Route::group(['middleware' => ['auth'], 'namespace' => 'Admin', 'prefix' => 'admin/management'], function () {
    Route::get('/', 'ManagementController@index')->name('management.index');
    // UserController
    Route::get('users/export/', 'UserController@export')->name('export');
    Route::post('/users/search', 'UserController@searchByCode')->name('users.search');

    Route::resource('/users', 'UserController');

    Route::resource('/publishers', 'PublisherController');

    Route::resource('/authors', 'AuthorController');

    Route::post('/books/search', 'BookController@search')->name('books.search');
    Route::resource('/books', 'BookController');


    Route::post('/orders/search', 'OrdersController@filter')->name('orders.search');
    Route::post('/orders/change-status', 'OrdersController@changeOrderStatus')->name('orders.changeStatus');
    Route::resource('/orders', 'OrdersController');

});

//Cart
Route::get('/cart','ShoppingCartController@index')->name('cart.index');
Route::get('/add-to-cart/{id}','ShoppingCartController@addToCart')->name('cart.addToCart');
Route::get('/update-cart/{id}','ShoppingCartController@updateProductIntoCart')->name('cart.updateIntoCart');
Route::get('/remove-cart/{id}','ShoppingCartController@removeProductIntoCart')->name('cart.removeIntoCart');

//Order
Route::post('/orders', 'OrderController@store')->name('bill.store');

Route::get('/user-list', 'UserController@getBills')->name('users.listBill');
Route::get('/user-order-detail/{id}', 'UserController@getBillDetail')->name('users.billDetail');
