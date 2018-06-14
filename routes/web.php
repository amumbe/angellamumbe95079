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
Route::get('/',function(){
    return view('angellamumbe.index');
});
Route::get('/student_information/{id}','StudentController@show_student_info');
Route::get('/totalfees', 'StudentController@showall');
Route::resource('student','StudentController');
Route::resource('fees','FeesController');
Route::get('/student', 'IndexController@getstudent');
Route::post('/results', 'FeesController@search');
Route::get('/search', 'studentcontroller@search');

