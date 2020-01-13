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
Route::get('/',function (){
    return redirect('/login');
});
Route::get('/backend','SuperAdminController@index');


//student
Route::get('/student/getdata','StudentController@getData')->name('student.getData');
Route::resource('student','StudentController');
Route::get('/students/{id}','StudentController@destroy');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
