<?php

Route::get('/', function () {
    return view('start-page');
});

/*Departments Route*/
Route::get('departments', 'DepartmentController@index');
Route::get('departments/add', 'DepartmentController@create');
Route::post('departments/add', 'DepartmentController@store');
Route::get('departments/edit/{id}', 'DepartmentController@edit');
Route::post('departments/update', 'DepartmentController@store');
Route::get('departments/delete/{id}', 'DepartmentController@delete');
Route::get('departments/trash', 'DepartmentController@trashIndex');
Route::get('departments/restore/{id}', 'DepartmentController@restore');
Route::get('departments/delete-permanently/{id}', 'DepartmentController@deletePermanently');
