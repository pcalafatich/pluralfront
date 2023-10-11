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

Route::group(['namespace' => 'App\Http\Controllers'], function()
{
    Route::get('/', 'PagesController@index')->name('pages.index');
    Route::get('/about', 'PagesController@about')->name('pages.about');
    Route::get('/contact', 'PagesController@contact')->name('pages.contact');

});
