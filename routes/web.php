<?php

Route::get('/', function () {
    return view('start-page');
});

/*Departments Route*/

Route::get('departments', 'DepartmentController@index');
Route::get('departments/add', 'DepartmentController@create');
Route::post('departments/add', 'DepartmentController@store');