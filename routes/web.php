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

// mentors
Route::get('mentors/', 'MentorsController@index')->name('mentors.index');
Route::get('mentors/create', 'MentorsController@create')->name('mentors.create');
Route::get('mentors/{mentor}/', 'MentorsController@show')->name('mentors.show');
Route::get('mentors/{mentor}/edit', 'MentorsController@edit')->name('mentors.edit');
Route::post('mentors/', 'MentorsController@store')->name('mentors.store');
Route::patch('mentors/{mentor}/update', 'MentorsController@update')->name('mentors.update');
Route::delete('mentors/{mentor}/delete', 'MentorsController@destroy')->name('mentors.delete');

// students
Route::get('students/', 'StudentsController@index')->name('students.index');
Route::get('students/create', 'StudentsController@create')->name('students.create');
Route::get('students/{student}/', 'StudentsController@show')->name('students.show');
Route::get('students/{student}/edit', 'StudentsController@edit')->name('students.edit');
Route::post('students/', 'StudentsController@store')->name('students.store');
Route::patch('students/{student}/update', 'StudentsController@update')->name('students.update');
Route::delete('students/{student}/delete', 'StudentsController@destroy')->name('students.delete');

// users
Route::get('users/', 'UsersController@index')->name('users.index');
Route::get('users/create', 'UsersController@create')->name('users.create');
Route::get('users/{user}/', 'UsersController@show')->name('users.show');
Route::get('users/{user}/edit', 'UsersController@edit')->name('users.edit');
Route::post('users/', 'UsersController@store')->name('users.store');
Route::patch('users/{user}/update', 'UsersController@update')->name('users.update');
Route::delete('users/{user}/delete', 'UsersController@destroy')->name('users.delete');

// Login routing
Route::get('login/', 'LoginController@index')->name('login');
Route::post('login/connect', 'LoginController@connect')->name('login.connect');
Route::get('login/disconnect', 'LoginController@disconnect')->name('login.disconnect');
Route::get('dashboard/', 'LoginController@dashboard')->name('login.dashboard');