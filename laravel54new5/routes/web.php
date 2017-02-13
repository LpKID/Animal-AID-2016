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

Route::get('index', 'AnimalController@index');
Route::get('askinput', 'AnimalController@askinput');
Route::resource('admins', 'AdminsController');
Route::get('create', 'AnimalController@create');

use App\Admin;
Route::get('test', function(){
    $admins = Admin::all();
    return $admins;
});
use App\Animal;
Route::resource('animals', 'AnimalsController');
Route::get('ani', function(){
    $admins = Admin::all();
    return $admins;
});