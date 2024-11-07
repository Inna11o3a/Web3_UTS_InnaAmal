<?php


use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/student/create', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource("student", App\Http\Controllers\StudentController::class);
Route::delete('students/{id}', [StudentController::class, 'destroy'])->name('delete.blade');
Route::put('/student/{id}', [StudentController::class, 'update'])->name('student.update');




