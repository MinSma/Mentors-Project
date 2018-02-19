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

// mentors
Route::get('mentors/', 'MentorController@index')->name('mentors.index');
Route::get('mentors/{mentor}/', 'MentorController@show')->name('mentors.show');
Route::get('mentors/{mentor}/edit', 'MentorController@edit')->name('mentors.edit');
Route::get('mentors/create', 'MentorController@create')->name('mentors.create');
Route::post('mentors/', 'MentorController@store')->name('mentors.store');
Route::patch('mentors/{mentor}/update', 'MentorController@update')->name('mentors.update');
Route::delete('mentors/{mentor}/delete', 'MentorController@destroy')->name('mentors.delete');

// students
Route::get('students/', 'StudentController@index')->name('students.index');
Route::get('students/{student}/', 'StudentController@show')->name('students.show');
Route::get('students/{student}/edit', 'StudentController@edit')->name('students.edit');
Route::get('students/create', 'StudentController@create')->name('students.create');
Route::post('students/', 'StudentController@store')->name('students.store');
Route::patch('students/{student}/update', 'StudentController@update')->name('students.update');
Route::delete('students/{student}/delete', 'StudentController@destroy')->name('students.delete');

// users
Route::get('users/', 'UserController@index')->name('users.index');
Route::get('users/{user}/', 'UserController@show')->name('users.show');
Route::get('users/{user}/edit', 'UserController@edit')->name('users.edit');
Route::get('users/create', 'UserController@create')->name('users.create');
Route::post('users/', 'UserController@store')->name('users.store');
Route::patch('users/{user}/update', 'UserController@update')->name('users.update');
Route::delete('users/{user}/delete', 'UserController@destroy')->name('users.delete');