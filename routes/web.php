<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentsController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [StudentsController::class, 'allStudents'])->name('allStudent');

Route::post('/add', [StudentsController::class, 'addStudent'])->name('addNewStudent');

Route::view('/add', '/crud.add_student');

Route::get('/update/{id}', [StudentsController::class, 'getSingleRecord'])->name('getStudent');

Route::post('/updateData/{id}', [StudentsController::class, 'updateStudent'])->name('updateStudent');

Route::get('/delete/{id}', [StudentsController::class, 'deleteStudent'])->name('deleteStudent');