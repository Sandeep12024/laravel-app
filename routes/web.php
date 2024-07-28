<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentsController;

// Route::get('/', function () {
//     return view('welcome');
// });


/*
# Single route
Route::get('/', [StudentsController::class, 'allStudents'])->name('allStudent');

Route::post('/add', [StudentsController::class, 'addStudent'])->name('addNewStudent');

Route::view('/add', '/crud.add_student');

Route::get('/update/{id}', [StudentsController::class, 'getSingleRecord'])->name('getStudent');

Route::post('/updateData/{id}', [StudentsController::class, 'updateStudent'])->name('updateStudent');

Route::get('/delete/{id}', [StudentsController::class, 'deleteStudent'])->name('deleteStudent');

*/


# Group route
Route::controller(StudentsController::class)->group(function () {

    Route::get('/', 'allStudents')->name('allStudent');

    Route::post('/add', 'addStudent')->name('addNewStudent');
    
    Route::view('/add', '/crud.add_student');
    
    Route::get('/update/{id}', 'getSingleRecord')->name('getStudent');
    
    Route::post('/updateData/{id}', 'updateStudent')->name('updateStudent');
    
    Route::get('/delete/{id}', 'deleteStudent')->name('deleteStudent');

});
