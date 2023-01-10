<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $student = Student::all();
        return view('Student.student', compact('student'));
    }

    // public function show($id)
    // {
    //     $student = Student::find($id);
    //     echo "Pershendetje Student Show " . $student->firstname;
    // }

    public function edit($id)
    {
        $student = Student::find($id);
        return view('Student.edit', compact('student'));
    }

    public function update(Request $request)
    {
        dd($request->all());
    }
}
