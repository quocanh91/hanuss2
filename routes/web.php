<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/posts/{post}', 'PostsController@show');



Route::get('/student', 'StudentsController@index');
Route::post('/student','StudentsController@store');
Route::get('/student/create', 'StudentsController@create');
Route::get('/student/{student}/edit', 'StudentsController@edit');
Route::put('/student/{student}', 'StudentsController@update');