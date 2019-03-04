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

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

//BOOKS

Route::get('/libros', 'BookController@index')->name('books.index');
Route::get('/cargar_libros', 'BookController@create')->name('books.create');
Route::post('/books', 'BookController@store')->name('books.store');
Route::post('/books_edit', 'BookController@edit')->name('books.edit');

