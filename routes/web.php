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

//For Dashboard
Route::get('/','HomeController@index');
//for Teachers
Route::get('teacher_list','TeacherController@index');
Route::get('teacher_registration','TeacherController@create');
Route::post('store_teacher','TeacherController@store');
Route::delete('delete_teacher/{id}','TeacherController@destroy');
Route::get('edit_teacher/{id}','TeacherController@edit');
Route::patch('update/{id}','TeacherController@update');
//Route::resource('teachers','TeacherController');
//for Staffs
Route::get('staff_list','StaffController@index');
Route::get('staff_registration','StaffController@registration');
Route::post('store_staff','StaffController@store');
Route::get('edit_staff/{id}','StaffController@edit');
Route::patch('update_staff/{id}','StaffController@update');
Route::delete('delete_staff/{id}','StaffController@destroy');
//for Students
Route::get('student_list','StudentController@index');
Route::get('student_registration','StudentController@registration');
Route::post('store_student','StudentController@store');
Route::get('edit_student/{id}','StudentController@edit');
Route::patch('update_student/{id}','StudentController@update');
Route::delete('delete_student/{id}','StudentController@destroy');
//for parent
Route::resource('parents','ParentController');