<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/insert-students',[StudentController::class, 'create']);
Route::post('/store-students',[StudentController::class, 'store']);
Route::get('/show-students',[StudentController::class, 'show']);
Route::get('/delete-students/{id}',[StudentController::class, 'destroy']);
Route::get('/edit-students/{id}',[StudentController::class, 'edit']);
Route::post('/update-students/{id}',[StudentController::class, 'update']);
