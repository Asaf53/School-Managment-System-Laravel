<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use App\Models\classroom_subject;
use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SubjectClassroomController extends Controller
{
    public function index()
    {
        $classrooms = Classroom::all();
        // dd($classrooms);
        return view('subjectClassroom.show', compact('classrooms'));
    }
    
    public function add()
    {
        $classrooms = Classroom::select(
            'classrooms.id',
            'classrooms.grade',
        )->get();
        $subjects = Subject::select(
            'subjects.id',
            'subjects.name',
        )->get();
        return view('subjectClassroom.add', compact('classrooms', 'subjects'));
    }
    
    public function storeSubjectClassroom(Request $request)
    {
        // $subject = new classroom_subject();
        
        // $subjects_no = $request->input('addMoreInputFields', []);
        // $classroom = $request->input('subjectClassroom');

        // $count = count($subjects_no);
        // $data = [];
        // for ($i=0; $i < count($subjects_no); $i++) {
        //     $data[] = [
        //         'classroom_id' => $classroom,
        //         'subject_id' => $subjects_no,
        //     ];

            // $save = implode(',', $data);
            // $save2 = json_encode($data);
            // DB::table('classroom_subjects')->insert($save2);
            // dd($save2);
        // }

        foreach ($request->addMoreInputFields as $key => $insert) {
            $saveRecord = [
                'classroom_id' => $request->subjectClassroom,
                'subject_id' => $request->addMoreInputFields[$key],
            ];

            DB::table('classroom_subjects')->insert($saveRecord);
        }

        return redirect()->route('showSubjectClassroom')->with('alert', 'Subject And Classroom Added Successfully');

        
        // foreach ($subjects_no as $key => $value) {
        //     // $subject->classroom_id = $classroom;
        //     // $subject->subject_id = $subjects_no;
        //     $subjects_no = $request->input('addMoreInputFields');
        //     $classroom = $request->input('subjectClassroom');
        //     dd($classroom, $subjects_no[$key]);
        // }
        // $subject->save();
        

        // DB::table('classroom_subjects')->insert($datasave);

        // dd($datasave);
        // $subject->insert($datasave);
        // dd($request->all());
            
            
            // $subject->classroom_id = $classroom;
            // $subject->subject_id = $subjects_no;
        // $subject->save($datasave);


        // echo $subject->toSql();
        // $subject->save($data);
        // dd($request->all());




        // $classroom = $request->input('subjectClassroom');
        // $subjectName = $request->input('subject');

        // $subject = new classroom_subject();
        // $subject->classroom_id = $classroom;
        // $subject->subject_id = $subjectName;
        // $subject->save();

        // return 'success';
        // dd($request->all());
    }

    // public function edit($id)
    // {
    //     $student = Student::find($id);
    //     $classrooms = Classroom::find($id);
    //     $subjects = Subject::select(
    //         'subjects.id',
    //         'subjects.name',
    //     )->get();
    //     dd($classrooms);
    //     return view('subjectClassroom.edit', compact('classrooms', 'subjects'));
    // }

    public function delete($id)
    {
        Classroom::destroy($id);
        return redirect()->route('showSubjectClassroom')->with('alert', 'Subject Classroom Deleted Successfully');
    }
}
