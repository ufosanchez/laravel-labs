<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get(
    'students/trash/{id}',[StudentController::class, 'trash']
    ) ->name('students.trash');

Route::resource('students', StudentController::class);
