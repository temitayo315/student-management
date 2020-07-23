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

Route::get('/', 'studentController@index');
//Route for homepage
Route::get('/student', 'studentController@create');
//student registration
Route::post('/store', 'studentController@store');
Route::get('/edit/{id}', 'studentController@edit');
Route::get('/delete/{id}', 'studentController@destroy');
Route::post('/update/{id}', 'studentController@update');

Route::get('/courseReg', 'courseController@create');
Route::post('/storeCourse', 'courseController@store');
Route::get('/editCourse/{id}', 'courseController@edit');
Route::get('/deleteCourse/{id}', 'courseController@destroy');
Route::post('/updateCourse/{id}', 'courseController@update');