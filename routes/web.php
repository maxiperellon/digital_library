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
    return view('auth.login');
});

Auth::routes();


//BOOKS

Route::get('/libros', 'BookController@index')->name('books.index');
Route::get('/cargar_libros', 'BookController@create')->name('books.create');
Route::post('/books', 'BookController@store')->name('books.store');
Route::get('/books_edit/{id}', 'BookController@edit')->name('books.edit');
Route::patch('/books_update/{id}', 'BookController@update')->name('books.update');
Route::delete('/books_destroy/{id}', 'BookController@destroy')->name('books.destroy');
Route::post('/books/buscar', 'BookController@searchByFilter')->name('books.searchByFilter');


//STUDENTS

Route::get('/estudiantes', 'StudentController@index')->name('students.index');
Route::get('/cargar_alumnos', 'StudentController@create')->name('students.create');
Route::post('/students', 'StudentController@store')->name('students.store');
Route::get('/students_edit/{id}', 'StudentController@edit')->name('students.edit');
Route::patch('/students_update/{id}', 'StudentController@update')->name('students.update');
Route::delete('/students_destroy/{id}', 'StudentController@destroy')->name('students.destroy');
Route::post('/students/buscar', 'StudentController@searchByFilter')->name('students.searchByFilter');

