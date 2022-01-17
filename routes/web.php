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
    return view('auth.login');
});



Route::get('/register','App\Http\Controllers\AuthController@register')->name('register');
Route::post('/postregister','App\Http\Controllers\AuthController@postregister');
Route::get('/login','App\Http\Controllers\AuthController@login')->name('login');
Route::post('/postlogin','App\Http\Controllers\AuthController@postlogin');
Route::get('/logout','App\Http\Controllers\AuthController@logout');

Route::middleware(['middleware' => 'auth'])->group(function(){
Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index');
Route::get('/students', 'App\Http\Controllers\StudentController@index');
Route::post('/students/create', 'App\Http\Controllers\StudentController@create');
Route::get('/students/{id}/edit', 'App\Http\Controllers\StudentController@edit');
Route::post('/students/{id}/update', 'App\Http\Controllers\StudentController@update');
Route::get('/delete/{id}', 'App\Http\Controllers\StudentController@delete')->name('delete');
Route::get('/students/{id}/profile', 'App\Http\Controllers\StudentController@profile');
});





Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
