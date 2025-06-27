<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function student()
    {
        $students = Student::all();
        return $students;
    }

    public function studentList()
    {
        $students = Student::all();
        return view("student", ["students" => $students]);
    }

    public function storeStudent(Request $request) {

        dd($request->all());
    }
}
