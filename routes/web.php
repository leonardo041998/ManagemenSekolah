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

Route::get('/students', 'App\Http\Controllers\StudentController@index');
Route::post('/students/create', 'App\Http\Controllers\StudentController@create');
Route::get('/students/{id}/edit', 'App\Http\Controllers\StudentController@edit');
Route::post('/students/{id}/update', 'App\Http\Controllers\StudentController@update');

Route::get('/delete/{id}', 'App\Http\Controllers\StudentController@delete')->name('delete');
// Route::post('/students/delete', 'App\Http\Controllers\StudentController@deleteStudent')->name('/students/delete');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
