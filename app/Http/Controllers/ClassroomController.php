<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClassroomController extends Controller
{
    public function index()
    {
        $classrooms = Classroom::select(
            'classrooms.id',
            'classrooms.grade',
            'classrooms.teacher_id',
            DB::raw('CONCAT(teachers.firstname," ",teachers.lastname) AS fullname'),
        )->join('teachers', 'classrooms.teacher_id', '=', 'teachers.id')->get();
        return view('classrooms.show', compact('classrooms'));
    }

    public function add()
    {
        $teachers = Teacher::select(
            'teachers.id',
            DB::raw('CONCAT(teachers.firstname," ",teachers.lastname) AS fullname')
        )->get();
        return view('classrooms.add', compact('teachers'));
    }

    public function storeClassroom(Request $request)
    {


        // dd($request);
        $request->validate([
            'grade' => 'required|max:255',
            'teacher' => 'required|max:255',
        ]);

        $grade = $request->input('grade');
        $teacher_id = $request->input('teacher');

        $classroom = new Classroom();

        $classroom->grade = $grade;
        $classroom->teacher_id = $teacher_id;
        $classroom->save();

        return redirect()->route('showClassroom')->with('alert', 'Classroom Added Successfully');
    }

    public function edit($id)
    {
        $classrooms = Classroom::find($id);
        $teachers = Teacher::select(
            'teachers.id',
            DB::raw('CONCAT(teachers.firstname," ",teachers.lastname) AS fullname')
        )->get();
        return view('classrooms.edit', compact('classrooms', 'teachers'));
    }

    public function update(Request $request, $id)
    {        
        $classroom = Classroom::find($id);

        $request->validate([
            'grade' => 'required|max:255',
            'teacher' => 'required|max:255',
        ]);

        $classroom->grade = $request->input('grade');
        $classroom->teacher_id = $request->input('teacher');
        
        $classroom->save();
        
        // dd($request->all());
        return redirect()->route('showClassroom')->with('alert', 'Classroom Updated Successfully');
    }

    public function delete($id)
    {
        Classroom::destroy($id);
        return redirect()->route('showClassroom')->with('alert', 'Classroom Deleted Successfully');
    }
}
