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

//CRUD
Route::get('/1', 'MuralController@create');
Route::get('/2', 'MuralController@read');
Route::get('/3', 'MuralController@update');
Route::get('/4', 'MuralController@delete');


