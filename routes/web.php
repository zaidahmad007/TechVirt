<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeacherController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});






require __DIR__.'/auth.php';
Route::get('/teacherD',[StudentController::class,'teacherD'])->middleware(['auth'])->name('teacherD');
Route::get('/studentD',[StudentController::class,'studentD'])->middleware(['auth'])->name('studentD');

Route::get('/dashboard',[Controller::class,'dashboard'])->middleware(['auth'])->name('dashboard');
Route::get('/addnotes',[TeacherController::class,'addnotes'])->middleware(['auth'])->name('addnotes');
Route::post('/submitNotes',[TeacherController::class,'submitNotes'])->name('submitNotes');
Route::get('/adminD',[AdminController::class,'adminD']);
Route::get('/showNotes',[TeacherController::class,'showNotes'])->name('showNotes');
