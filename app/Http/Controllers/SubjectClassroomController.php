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
        $classroomSubject = classroom_subject::select(
            'classrooms.id',
            'subjects.name',
            'classrooms.grade',
        )
            ->join('classrooms', 'classroom_id', '=', 'classrooms.id')
            ->join('subjects', 'subject_id', '=', 'subjects.id')
            // ->where('classrooms.id', $id)
            ->get();

        return view('subjectClassroom.show', compact('classroomSubject'));
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
        
        $subjects_no = $request->input('addMoreInputFields', []);
        $classroom = $request->input('subjectClassroom[]');

        foreach ($subjects_no as $key => $value) {
            $datasave = [
                'classroom_id' => $classroom,
                'subject_id' => $value,
            ];
        }

        // for ($i=0; $i < count($subjects_no); $i++) { 
        //     $datasave = [
        //         'classroom_id' => $classroom,
        //         'subject_id' => $subjects_no[$i],
        //     ];
        // }

        // DB::table('classroom_subjects')->insert($datasave);

        dd($datasave);
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
}
