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

// Authentication Routes...
Route::get('/', 'Auth\LoginController@showLoginForm')->name('login');
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');


Route::middleware(['auth'])->group(function () {
    //Route::view('admin', 'dashboard.pages.home');
    Route::resource('admin/players', 'Dashboard\ProductController');
    Route::resource('admin/news', 'Dashboard\NewsController');
    Route::resource('admin/pdf', 'PDFController');
    Route::resource('admin/videos', 'VideosController');
    Route::resource('admin/categories', 'Dashboard\CategoryController');
    Route::resource('admin/news-categories', 'Dashboard\NewsCategoryController');
    Route::resource('admin/about-us', 'Dashboard\AboutUsController');
    Route::resource('admin/transportations', 'TransportationsController');

    Route::get('admin/slider', 'Dashboard\SliderController@index')->name('admin.slider.index');
    Route::post('admin/slider', 'Dashboard\SliderController@update')->name('admin.slider.update');

});

