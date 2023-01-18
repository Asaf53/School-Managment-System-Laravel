<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SubjectController extends Controller
{
    public function index()
    {
        $subjects = Subject::select(
            'subjects.id',
            'subjects.name',
            DB::raw('CONCAT(teachers.firstname," ",teachers.lastname) AS fullname'),
            'subjects.description',
        )->join('teachers', 'subjects.teacher_id', '=', 'teachers.id')->get();
        // $fullname = 'teachers.firstname';
        // dd($subjects);
        return view('Subject.subject', compact('subjects'));
    }

    public function add()
    {
        $teachers = Teacher::select(
            'teachers.id',
            DB::raw('CONCAT(teachers.firstname," ",teachers.lastname) AS fullname')
        )->get();
        return view('Subject.add', compact('teachers'));
    }

    public function storeSubject(Request $request)
    {


        // dd($request);
        $request->validate([
            'subjectName' => 'required|max:255',
            'teacher' => 'required',
            'description' => 'required|max:255'
        ]);

        $name = $request->input('subjectName');
        $teacher_id = $request->input('teacher');
        $description = $request->input('description');

        $subject = new Subject();

        $subject->name = $name;
        $subject->teacher_id = $teacher_id;
        $subject->description = $description;
        $subject->save();

        // dd($request->all());

        return redirect()->route('showSubject')->with('alert', 'Subject Added Successfully');
    }
    public function edit($id)
    {
        $subject = Subject::find($id);
        $teachers = Teacher::all();
        return view('Subject.edit', compact('subject', 'teachers'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'subjectName' => 'required',
            'teacher' => 'required',
            'description' => 'required|max:255'
        ]);


        $subject = Subject::find($id);
        $subject->name = $request->input('subjectName');
        $subject->teacher_id = $request->input('teacher');
        $subject->description = $request->input('description');

        $subject->save();

        // dd($request->all());
        return redirect()->route('showSubject')->with('alert', 'Subject Updated Successfully');
    }

    public function delete($id)
    {
        Subject::destroy($id);
        return redirect()->route('showSubject')->with('alert', 'Subject Deleted Successfully');
    }
}
