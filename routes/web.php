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

//HOME

Route::get('/home_library', 'HomeController@home_library')->name('home.home_library');

//BOOKS

Route::get('/libros', 'BookController@index')->name('books.index');
Route::get('/cargar_libros', 'BookController@create')->name('books.create');
Route::post('/books', 'BookController@store')->name('books.store');
Route::get('/books_edit/{id}', 'BookController@edit')->name('books.edit');
Route::patch('/books_update/{id}', 'BookController@update')->name('books.update');
Route::delete('/books_destroy/{id}', 'BookController@destroy')->name('books.destroy');
Route::post('/books/buscar', 'BookController@searchByFilter')->name('books.searchByFilter');
Route::get('/ver_libro/{id}', 'BookController@show')->name('books.show');


//STUDENTS

Route::get('/estudiantes', 'StudentController@index')->name('students.index');
Route::get('/cargar_alumnos', 'StudentController@create')->name('students.create');
Route::post('/students', 'StudentController@store')->name('students.store');
Route::get('/students_edit/{id}', 'StudentController@edit')->name('students.edit');
Route::patch('/students_update/{id}', 'StudentController@update')->name('students.update');
Route::delete('/students_destroy/{id}', 'StudentController@destroy')->name('students.destroy');
Route::post('/students/buscar', 'StudentController@searchByFilter')->name('students.searchByFilter');
Route::get('/dato_alumno/{id}', 'StudentController@show')->name('students.show');

//FOR HIRES

Route::get('/prestamos/{id?}/{idbook?}', 'ForHireController@index')->name('for_hire.index');
Route::get('/cargar_prestamos', 'ForHireController@create')->name('for_hire.create');
Route::get('/prestamos_alumno/{id}/{bookid}', 'ForHireController@store')->name('for_hire.store');
Route::delete('/prestamo_borrado/{id}/{bookid?}', 'ForHireController@destroy')->name('for_hire.destroy');
Route::post('/search/{id?}/{bookid?}', 'ForHireController@searchByFilter')->name('for_hire.searchByFilter');
Route::get('/realizar_prestamo/{id}/', 'ForHireController@show')->name('for_hire.show');
Route::get('/prestamo/{id}/{bookid?}', 'ForHireController@add')->name('for_hire.add');


