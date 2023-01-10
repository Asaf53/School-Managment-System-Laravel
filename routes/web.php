<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::controller(StudentController::class)->group(function () {
    Route::get('/student/index', 'index')->name('showStudent');
    Route::get('/student/edit/{id}', 'edit')->name('editStudent');
    Route::post('/student/update', 'update')->name('updateStudent');
});
Route::controller(TeacherController::class)->group(function () {
    Route::get('/teacher/index', 'index')->name('showTeacher');
    Route::get('/teacher/edit/{id}', 'edit')->name('editTeacher');
    Route::post('/teacher/update', 'update')->name('updateTeacher');
});
