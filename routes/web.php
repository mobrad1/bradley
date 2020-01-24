<?php

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

use Illuminate\Support\Facades\Auth;
Route::get('/','ListingController@index');
Route::get('/business/{business}','ListingController@show')->name('listing.show');
Route::get('/search','ListingController@search')->name('search');
Route::group(["prefix" => "admin","namespace" => "Admin","middleware" => "auth:web"],function(){
    Route::get('/dashboard', 'DashboardController@index' )->name('admin.dashboard');
    Route::group(["prefix"=> "business","namespace" => "Business"],function(){
        Route::get('/','BusinessController@index')->name('admin.business');
        Route::post('/create','BusinessController@store')->name('admin.business.create');
        Route::get('/manage','BusinessController@manage')->name('admin.business.manage');
        Route::get('/{business}/show','BusinessController@show')->name('admin.business.show');
        Route::delete('/{business}/delete','BusinessController@delete')->name('admin.business.delete');
        Route::post('/{business}/suspend','BusinessController@suspend')->name('admin.business.suspend');
        Route::patch('/{business}/update','BusinessController@update')->name('admin.business.update');
        Route::get('/images','BusinessImageController@get')->name('admin.business.images');
    });
    Route::group(["prefix" => "category","namespace" => "Category"],function(){
       Route::get('/','CategoryController@index')->name('admin.category');
       Route::post('/create','CategoryController@store')->name('admin.category.create');
       Route::delete('/{category}/delete','CategoryController@delete')->name('admin.category.delete');
    });

});


Auth::routes();