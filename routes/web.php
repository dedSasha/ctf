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


Auth::routes();
Route::get('/', 'HomeController@tasks');
Route::get('/tasks', 'HomeController@tasks');
Route::get('/board', 'HomeController@board');
Route::get('/add_task', 'HomeController@add_task_form');

Route::post('/tasks/{task_id}', 'HomeController@check_flag');
Route::post('/add_task', 'HomeController@add_task');
