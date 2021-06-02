<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tasks', function () {
$data=App\Task::all();

    return view('tasks')->with('tasks',$data);
});


Route::post('/saveTask',

    'TaskController@store'

);

Route::get('/markascompleted/{id}','TaskController@UpdateasCompleted');

Route::get('/markasnotcompleted/{id}','TaskController@UpdateasNotCompleted');

Route::get('/deletetask/{id}','TaskController@deletetask');

Route::get('/updatetask/{id}','TaskController@updatetaskview');

Route::post('/updatetasks','TaskController@updatetask');

