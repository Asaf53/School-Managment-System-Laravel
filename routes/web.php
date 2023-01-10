<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\StudentController;
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

Auth::routes(['register' => false]);
Route::get('/logout', [LoginController::class, 'logout']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::controller(StudentController::class)->prefix('student')->middleware('isAdmin')->group(function () {
    Route::get('index', 'index')->name('showStudent');
    Route::get('add', 'add')->name('addStudent');
    Route::get('edit/{id}', 'edit')->name('editStudent');
    Route::post('update', 'update')->name('updateStudent');
});
Route::controller(TeacherController::class)->prefix('teacher')->middleware('isAdmin')->group(function () {
    Route::get('index', 'index')->name('showTeacher');
    Route::get('add', 'add')->name('addTeacher');
    Route::get('edit/{id}', 'edit')->name('editTeacher');
    Route::post('update', 'update')->name('updateTeacher');
});
Route::controller(ClassroomController::class)->prefix('classroom')->middleware('isAdmin')->group(function () {
    Route::get('index', 'index')->name('showClassroom');
    Route::get('add', 'add')->name('addClassroom');
    Route::get('edit/{id}', 'edit')->name('editClassroom');
    Route::post('update', 'update')->name('updateClassroom');

    Route::get('addSubjectClassroom', 'addSubjectClassroom')->name('addSubjectClassroom');
    Route::get('editSubjectClassroom/{id}', 'editSubjectClassroom')->name('editSubjectClassroom');
    Route::post('update', 'update')->name('updateSubjectClassroom');

    Route::get('addStudentClassroom', 'addStudentClassroom')->name('addStudentClassroom');
    Route::get('editStudentClassroom/{id}', 'editStudentClassroom')->name('editStudentClassroom');
    Route::post('update', 'update')->name('updateStudentClassroom');
});
Route::controller(SubjectController::class)->prefix('subject')->middleware('isAdmin')->group(function () {
    Route::get('index', 'index')->name('showSubject');
    Route::get('add', 'add')->name('addSubject');
    Route::get('edit/{id}', 'edit')->name('editSubject');
    Route::post('update', 'update')->name('updateSubject');
});
