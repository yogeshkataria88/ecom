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


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/dashboard', ['as' => 'dashboard', 'uses' => 'DashboardController@index']);

/*
 *  Cancer Type module
 *  get files from resources/views/categories
 * */
Route::group(array('prefix' => 'categories', 'as' => 'categories::'), function() {
    Route::any('/', ['as' => 'indexCategories', 'uses' => 'CategoriesController@index']);
    Route::post('datatable', ['uses' => 'CategoriesController@datatable']);
    Route::get('add', ['as' => 'createCategories', 'uses' => 'CategoriesController@create']);
    Route::get('edit/{id}', ['as' => 'editCategories', 'uses' => 'CategoriesController@edit']);
    Route::post('store', ['as' => 'storeCategories', 'uses' => 'CategoriesController@store']);
    Route::post('update', ['as' => 'updateCategories', 'uses' => 'CategoriesController@update']);
    Route::post('delete', ['as' => 'deleteCategories', 'uses' => 'CategoriesController@delete']);
});

/*
 *  Product module
 *  get files from resources/views/product
 * */
Route::group(array('prefix' => 'product', 'as' => 'product::'), function() {
    Route::any('/', ['as' => 'indexProduct', 'uses' => 'ProductController@index']);
    Route::post('datatable', ['uses' => 'ProductController@datatable']);
    Route::get('add', ['as' => 'createProduct', 'uses' => 'ProductController@create']);
    Route::get('edit/{id}', ['as' => 'editProduct', 'uses' => 'ProductController@edit']);
    Route::post('store', ['as' => 'storeProduct', 'uses' => 'ProductController@store']);
    Route::post('update', ['as' => 'updateProduct', 'uses' => 'ProductController@update']);
    Route::post('delete', ['as' => 'deleteProduct', 'uses' => 'ProductController@delete']);
});

Route::get('/download/{id}', ['as' => 'downloadPlan', 'uses' => 'ProductController@download', 'middleware' => ['auth','twofactor']]);
