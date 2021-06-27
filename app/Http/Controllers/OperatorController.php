<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Http\Request;

class OperatorController extends Controller
{
    function getStudents()
    {
        $collection = Student::get();
        return view('operator.students',compact('collection'));
    }
    function getStudent($id)
    {
        $item = Student::find($id);
        return view('operator.student_detail',compact('item'));
    }
    function editStudent($id)
    {
        $item = Student::find($id);
        return view('operator.student_edit',compact('item'));
    }
     public function updateStudent(Request $request, $id)
    { 
        Student::find($id)->update($request->all());
        return redirect()->route('students');
    }
    public function destroy($id)
    {
        Student::where('id',$id)->delete();
        return redirect()->route('students');
    }

    // DATA_GURU

    function getteachers()
    {
        $collection = Teacher::get();
        return view('operator.teachers',compact('collection'));
    }
    function getteacher($id)
    {
        $item = Teacher::find($id);
        return view('operator.teacher_detail',compact('item'));
    }
    function editteacher($id)
    {
        $item = Teacher::find($id);
        return view('operator.teacher_edit',compact('item'));
    }
     public function updateteacher(Request $request, $id)
    { 
        Teacher::find($id)->update($request->all());
        return redirect()->route('teachers');
    }
    public function destroyTeacher($id)
    {
        Teacher::where('id',$id)->delete();
        return redirect()->route('teachers');
    }

    public function import()
    {
        return view('operator.import');
    }
}
