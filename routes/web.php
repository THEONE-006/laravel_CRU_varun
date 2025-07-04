<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\ExamController;

use Illuminate\View\View;

Route::redirect('/','/index');

/*
//Route::redirect('/','/notes');

//Route::get('/notes', function () {
 //  return view('welcome');
//});

Route::resource('notes',NoteController::class);

Route::get('varun',[TestController::class,'index']);
Route::post('get-note',[TestController::class,'index']);
*/

Route::get('/create',[ExamController::class,'create']);

Route::post('/validate',[ExamController::class,'store']);

//Route::post('/exams/{id}',[ExamController::class,'update'])->name('exams.update');
Route::put('/exams/{id}',[ExamController::class,'update'])->name('exams.update');

Route::get('/index',[ExamController::class,'index'])->name('exams.index');

Route::get('/exams/{id}/edit',[ExamController::class,'edit'])->name('exams.edit');
?>