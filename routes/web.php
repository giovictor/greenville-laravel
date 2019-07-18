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
    return view('borrower.homepage');
})->name('homepage');


Route::get('search', 'SearchController@basicSearch')->name('basicSearch');
Route::get('collections/{id}', 'SearchController@collections')->name('collections');
Route::get('collections/search/{id}', 'SearchController@collectionsSearch')->name('collectionssearch');
