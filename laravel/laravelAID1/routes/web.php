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

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/admin', 'AdminController@index');
Route::get('/delete/{id}', 'AdminController@delete');
Route::get('/add','AnimalController@addAnimal');
Route::post('/add','AnimalController@addAnimal');
Route::get('/animal', 'AnimalController@animal');
Route::post('/animal', 'AnimalController@animal');
Route::get('/edit/{animal_id}','AnimalController@editAnimal');
Route::post('/edit','AnimalController@editAnimal');
Route::get('/deleteAnimal/{id}', 'AnimalController@deleteAnimal');

//เวลามึง แก้ไข มึงมาพาทนี้ิ Route::get('/edit/{animal_id}','AnimalController@editAnimal');

///โดยที่ส่ง ไอดีมาทาง url
//ทีนี้ มันจะเปนงี้ localhost: 8000/edit/5
//มันจะไปทำ get method
