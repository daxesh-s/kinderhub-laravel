<?php

use App\Http\Controllers\SchoolController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/students', StudentController::class);
Route::get('/schools/lists', [SchoolController::class, 'lists'])->name("schools.lists");
Route::resource('/schools', SchoolController::class);
