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

// Mentors
Route::get('mentors/', 'MentorsController@index')->name('mentors.index')->middleware('auth');
Route::get('mentors/search', 'MentorsController@search')->name('mentors.search');
Route::post('mentors/found', 'MentorsController@found')->name('mentors.found');
Route::get('mentors/dashboard', 'MentorsController@dashboard')->name('mentors.dashboard')->middleware('auth:mentor');
Route::post('mentors/dashboard', 'MentorsController@changePassword')->name('mentors.changePassword');
Route::get('mentors/create', 'MentorsController@create')->name('mentors.create');
Route::get('mentors/{mentor}/', 'MentorsController@show')->name('mentors.show');
Route::get('mentors/{mentor}/edit', 'MentorsController@edit')->name('mentors.edit');
Route::post('mentors/', 'MentorsController@store')->name('mentors.store');
Route::put('mentors/{mentor}/update', 'MentorsController@update')->name('mentors.update');
Route::delete('mentors/{mentor}/delete', 'MentorsController@destroy')->name('mentors.delete')->middleware('auth');

// Students
Route::get('students/', 'StudentsController@index')->name('students.index')->middleware('auth');
Route::get('students/dashboard', 'StudentsController@dashboard')->name('students.dashboard')->middleware('auth:student');
Route::get('students/create', 'StudentsController@create')->name('students.create');
Route::get('students/{student}/', 'StudentsController@show')->name('students.show');
Route::get('students/{student}/edit', 'StudentsController@edit')->name('students.edit');
Route::post('students/', 'StudentsController@store')->name('students.store');
Route::put('students/{student}/update', 'StudentsController@update')->name('students.update');
Route::delete('students/{student}/delete', 'StudentsController@destroy')->name('students.delete')->middleware('auth');

// Users
Route::get('users/', 'UsersController@index')->name('users.index')->middleware('auth');
Route::get('users/dashboard', 'UsersController@dashboard')->name('users.dashboard')->middleware('auth');
Route::get('users/create', 'UsersController@create')->name('users.create')->middleware('auth');
Route::get('users/{user}/', 'UsersController@show')->name('users.show');
Route::get('users/{user}/edit', 'UsersController@edit')->name('users.edit')->middleware('auth');
Route::post('users/', 'UsersController@store')->name('users.store')->middleware('auth');
Route::put('users/{user}/update', 'UsersController@update')->name('users.update')->middleware('auth');
Route::delete('users/{user}/delete', 'UsersController@destroy')->name('users.delete')->middleware('auth');

// Login routing
Route::get('login/', 'LoginController@index')->name('login');
Route::get('login/disconnect', 'LoginController@disconnect')->name('login.disconnect');
Route::post('login/connect', 'LoginController@connect')->name('login.connect');

// Guest routing
Route::get('/', 'AppearanceController@home')->name('guestPages.home');