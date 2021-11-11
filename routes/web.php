<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;



// Get the Form
Route::get('/', [StudentController::class,'index'])->name('index');
// Insert or create or get values from the Form using Post method
Route::post('/', [StudentController::class,'create']);



// Edit form
Route::get('/edit/{id}', [StudentController::class,'edit'])->name('edit');
// Update
Route::put('/edit/{id}', [StudentController::class,'update']);


// Delete
Route::get('/delete/{id}', [StudentController::class,'destroy']);
