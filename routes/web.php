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

Route::get('/dashboard', 'HomeController@index')->name('dashboard');

Route::get('/accountstree', 'OwnerController@display_account_tree')->name('accountstree');
Route::post('/add_new_accounttree', 'OwnerController@add_new_accounttree')->name('add_new_accounttree');



//////////////////////shops/////////////////////////////////

Route::get('/storeslist', 'ShopController@get_all_shops')->name('storeslist');

Route::get('/newstore', 'ShopController@newshops_form_display')->name('newstore');

Route::post('/shop_activation', 'ShopController@shop_activation')->name('shop_activation');

Route::get('/storepermission', 'ShopController@get_shop_permissions')->name('storepermission');

