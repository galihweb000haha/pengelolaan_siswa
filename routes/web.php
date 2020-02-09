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

Route::get('/', 'StudentsController@index');
Route::get('/student/create', 'StudentsController@create');
Route::post('/student/store', 'StudentsController@store');
Route::delete('/student/{student}', 'StudentsController@destroy');
Route::get('/student/{student}/edit', 'StudentsController@edit');
Route::patch('/student/{student}', 'StudentsController@update');
Route::get('/student/search', 'StudentsController@search');