<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use App\Models\Student;
use App\Models\Subject;
use App\Models\Teacher;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $student = Student::all()->count();
        $teacher = Teacher::all()->count();
        $classroom = Classroom::all()->count();
        $subject = Subject::all()->count();
        $para = array('student' => $student, 'teacher' => $teacher, 'classroom' => $classroom, 'subject' => $subject);
        return view('home')->with($para);
    }
}
