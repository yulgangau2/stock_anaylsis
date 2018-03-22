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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::prefix('analysis_with')->group(function () {
    Route::get('/peg', 'StockController@PEG')->name('peg');
    Route::get('/ddm', 'StockController@DDM')->name('ddm');
    Route::get('/dcf', 'StockController@DCF')->name('dcf');
    Route::get('/ps', 'StockController@PS')->name('ps');
    Route::get('/ev_ebitda', 'StockController@EV')->name('ev');
});

Route::prefix('find')->group(function () {
    Route::get('/pe', 'StockController@PEG')->name('pe');
    Route::get('/pbv', 'StockController@DDM')->name('pbv');
});