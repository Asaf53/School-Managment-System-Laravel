<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        $teachers = Teacher::all();
        return view('Teacher.teacher', compact('teachers'));
    }

    public function edit($id)
    {
        $teachers = Teacher::find($id);
        return view('Teacher.edit', compact('teachers'));
    }

    public function update(Request $request)
    {
        dd($request->all());
    }
}
