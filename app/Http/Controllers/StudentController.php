<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function index()
    {
        $student = Student::select(
            'students.id',
            'students.firstname',
            'students.lastname',
            'students.date_of_birthday',
            'students.email',
            'students.phone',
            'students.address',
            'students.gender',
            'students.parent_name',
            'students.classroom_id',
            'students.registered',
            'classrooms.grade',
        )->join('classrooms', 'students.classroom_id', '=', 'classrooms.id')->get();
        return view('Student.student', compact('student'));
    }

    public function add()
    {
        $classroom = Classroom::all();
        return view('Student.add', compact('classroom'));
    }

    public function storeStudent(Request $request)
    {

        $request->validate([
            'firstname' => 'required|max:255',
            'lastname' => 'required|max:255',
            'email' => 'required|max:255|email',
            'dateOfBirthday' => 'required|date',
            'registered' => 'required|date',
            'phone' => 'required|max:255',
            'address' => 'required|max:255',
            'gender' => 'required|max:255',
            'parentName' => 'required|max:255',
        ]);

        $firstname = $request->input('firstname');
        $lastname = $request->input('lastname');
        $date_of_birthday = $request->input('dateOfBirthday');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $address = $request->input('address');
        $gender = $request->input('gender');
        $registered = $request->input('registered');
        $parent_name = $request->input('parentName');
        $classroom = $request->input('classroom');

        // dd($request);

        $student = new Student();
        $student->firstname = $firstname;
        $student->lastname = $lastname;
        $student->date_of_birthday = $date_of_birthday;
        $student->email = $email;
        $student->phone = $phone;
        $student->address = $address;
        $student->gender = $gender;
        $student->registered = $registered;
        $student->parent_name = $parent_name;
        $student->classroom_id = $classroom;

        $student->save();

        return redirect()->route('showStudent')->with('alert', 'Student Added Successfully');
    }

    public function edit($id)
    {
        $student = Student::find($id);
        $classroom = Classroom::all();
        return view('Student.edit', compact('student', 'classroom'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'firstname' => 'required|max:255',
            'lastname' => 'required|max:255',
            'email' => 'required|max:255|email',
            'phone' => 'required|max:255',
            'address' => 'required|max:255',
            'gender' => 'required|max:255',
            'parentName' => 'required|max:255'
        ]);

        $student = Student::find($id);
        $student->firstname = $request->input('firstname');
        $student->lastname = $request->input('lastname');
        $student->date_of_birthday = $request->input('dateOfBirthday');
        $student->email = $request->input('email');
        $student->phone = $request->input('phone');
        $student->address = $request->input('address');
        $student->gender = $request->input('gender');
        $student->created_at = $request->input('registered');
        $student->parent_name = $request->input('parentName');
        $student->classroom_id = $request->input('classroom');

        $student->save();

        // dd($request->all());
        return redirect()->route('showStudent')->with('alert', 'Student Updated Successfully');
    }

    public function delete($id)
    {
        Student::destroy($id);
        return redirect()->route('showStudent')->with('alert', 'Student Deleted Successfully');
    }
}
