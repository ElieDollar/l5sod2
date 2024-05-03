<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;


 Route::get('/',[CourseController::class, 'getcourses']);

Route::get('/', function () {
    return view('index');
});

Route::post('/courses',[App\Http\Controllers\CourseController::class,'savecourses']);
Route::post('/courses',[App\Http\Controllers\CourseController::class,'savecourses']);
