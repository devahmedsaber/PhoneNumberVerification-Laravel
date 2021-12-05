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

Route::group(['middleware' => ['auth', 'checkIsAdmin']], function () {
    Route::get('/', 'HomeController@adminView')->name('admin.dashboard');

    Route::group(['prefix' => 'phone'], function () {
        Route::get('/', 'PhonesController@index')->name('phone.index');
        Route::get('check', 'PhonesController@check')->name('phone.check');
        Route::post('verify', 'PhonesController@verify')->name('phone.verify');
        Route::delete('delete/{id}', 'PhonesController@delete')->name('phone.delete');
        Route::get('history', 'PhonesController@history')->name('phone.history');
        Route::post('filter', 'PhonesController@filter')->name('phone.filter');
    });

    Route::resource('countries', 'CountriesController');
});


