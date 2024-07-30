<?php

use App\Http\Controllers\StudentsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('insert-students',[StudentsController::class,'create']);
Route::get('show-students',[StudentsController::class,'index']);
Route::get('edit-students/{id}',[StudentsController::class,'edit']);
Route::post('store-students',[StudentsController::class,'store']);
Route::post('update-students/{id}',[StudentsController::class,'update']);
Route::get('delete-students/{id}',[StudentsController::class,'destroy']);
