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
Route::get('/', 'WebsiteController@index' )->name('website-home');
Route::get('website-about/', 'WebsiteController@about' )->name('website-about');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::match(['get','post'],'/gallery-card', 'GalleryController@index')->name('gallery-card');
Route::get('gallery-delete/{cid}', 'GalleryController@galleryDelete')->name('gallery-delete');

Route::get('cat_table/{cat}', 'subCategoryController@catTable')->name('cat_table');
Route::get('getCategory/{cat}', 'subCategoryController@getCategory')->name('getCategory');

Route::match(['get','post'],'/subcategory-image', 'subCategoryController@add')->name('subcategory-image');
Route::get('subCategory-delete/{cat}{id}', 'subCategoryController@subCategoryDelete')->name('subCategory-delete');



