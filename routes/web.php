<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectClassroomController;
use App\Http\Controllers\SubjectController;
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
// Auth::routes(['register' => false]);
Route::get('/logout', [LoginController::class, 'logout']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::controller(StudentController::class)->prefix('student')->middleware('isAdmin')->group(function () {
    Route::get('index', 'index')->name('showStudent');
    Route::get('add', 'add')->name('addStudent');
    Route::post('store', 'storeStudent')->name('storeStudent');
    Route::get('edit/{id}', 'edit')->name('editStudent');
    Route::post('update/{id}', 'update')->name('updateStudent');
    Route::get('delete/{id}', 'delete')->name('deleteStudent');
});
Route::controller(TeacherController::class)->prefix('teacher')->middleware('isAdmin')->group(function () {
    Route::get('index', 'index')->name('showTeacher');
    Route::get('add', 'add')->name('addTeacher');
    Route::post('store', 'storeTeacher')->name('storeTeacher');
    Route::get('edit/{id}', 'edit')->name('editTeacher');
    Route::post('update/{id}', 'update')->name('updateTeacher');
    Route::get('delete/{id}', 'delete')->name('deleteTeacher');
});
Route::controller(ClassroomController::class)->prefix('classroom')->middleware('isAdmin')->group(function () {
    Route::get('index', 'index')->name('showClassroom');
    Route::get('add', 'add')->name('addClassroom');
    Route::post('store', 'storeClassroom')->name('storeClassroom');
    Route::get('edit/{id}', 'edit')->name('editClassroom');
    Route::post('update/{id}', 'update')->name('updateClassroom');
    Route::get('delete/{id}', 'delete')->name('deleteClassroom');
});

Route::controller(SubjectClassroomController::class)->prefix('classroomsubject')->middleware('isAdmin')->group(function () {
    Route::get('index', 'index')->name('showSubjectClassroom');
    Route::get('add', 'add')->name('addSubjectClassroom');
    Route::post('storeSubjectClassroom', 'storeSubjectClassroom')->name('storeSubjectClassroom');
    Route::get('delete/{id}', 'delete')->name('deleteSubjectClassroom');
});
Route::controller(SubjectController::class)->prefix('subject')->middleware('isAdmin')->group(function () {
    Route::get('index', 'index')->name('showSubject');
    Route::get('add', 'add')->name('addSubject');
    Route::post('store', 'storeSubject')->name('storeSubject');
    Route::get('edit/{id}', 'edit')->name('editSubject');
    Route::post('update/{id}', 'update')->name('updateSubject');
    Route::get('delete/{id}', 'delete')->name('deleteSubject');
});
