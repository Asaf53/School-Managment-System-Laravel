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

    public function add()
    {
        return view('Teacher.add');
    }

    public function storeTeacher(Request $request)
    {

        $request->validate([
            'firstname' => 'required|max:255|string',
            'lastname' => 'required|max:255|string',
            'dateOfBirthday' => 'required|date',
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required|max:255',
            'gender' => 'required|max:50|string',
            'registered' => 'required|date',
        ]);

        $firstname = $request->input('firstname');
        $lastname = $request->input('lastname');
        $date_of_birthday = $request->input('dateOfBirthday');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $address = $request->input('address');
        $gender = $request->input('gender');
        $registered = $request->input('registered');

        // dd($request);

        $teacher = new Teacher();
        $teacher->firstname = $firstname;
        $teacher->lastname = $lastname;
        $teacher->date_of_birthday = $date_of_birthday;
        $teacher->email = $email;
        $teacher->phone = $phone;
        $teacher->address = $address;
        $teacher->gender = $gender;
        $teacher->registered = $registered;

        $teacher->save();

        return redirect()->route('showTeacher')->with('alert', 'Teacher Added Successfully');
    }

    public function edit($id)
    {
        $teachers = Teacher::find($id);
        return view('Teacher.edit', compact('teachers'));
    }

    public function update(Request $request, $id)
    {
        $teacher = Teacher::find($id);

        $request->validate([
            'firstname' => 'required|max:255|string',
            'lastname' => 'required|max:255|string',
            'dateOfBirthday' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required|max:255',
            'gender' => 'required|max:50|string',
            'registered' => 'required',
        ]);

        $firstname = $request->input('firstname');
        $lastname = $request->input('lastname');
        $date_of_birthday = $request->input('dateOfBirthday');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $address = $request->input('address');
        $gender = $request->input('gender');
        $registered = $request->input('registered');

        $teacher->firstname = $firstname;
        $teacher->lastname = $lastname;
        $teacher->date_of_birthday = $date_of_birthday;
        $teacher->email = $email;
        $teacher->phone = $phone;
        $teacher->address = $address;
        $teacher->gender = $gender;
        $teacher->registered = $registered;

        $teacher->save();
        return redirect()->route('showTeacher')->with('alert', 'Teacher Updated Successfully');
    }

    public function delete($id)
    {
        Teacher::destroy($id);
        return redirect()->route('showTeacher')->with('alert', 'Teacher Deleted Successfully');
    }
}
