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

Route::get('/library', 'LibraryController@index')->name('library.index');

Route::get('/library/create', 'LibraryController@create')->name('library.create');

Route::post('/library', 'LibraryController@store')->name('library.store');

Route::get('/library/{slot}', 'LibraryController@show')->name('library.show');

Route::get('/library/{slot}/edit', 'LibraryController@edit')->name('library.edit');

Route::put('/library/{slot}', 'LibraryController@update')->name('library.update');

Route::delete('/library/{slot}', 'LibraryController@destroy')->name('library.destroy');

