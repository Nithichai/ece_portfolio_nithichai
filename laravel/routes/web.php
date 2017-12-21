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
    return redirect('/welcome');
});

Route::get('home', 'HomeController@index')->name('home');
Auth::routes();
Route::resource('welcome', 'WelcomeController', ['only' => [
    'index'
]]);
Route::resource('students', 'StudentController', ['only' => [
    'index'
]]);
Route::get('profile', 'ProfileController@index');
Route::get('profile/edit', 'ProfileController@edit');
Route::post('profile', 'ProfileController@store');
Route::post('personal/update', 'PersonalController@update');
Route::post('reward/update', 'RewardController@update');
