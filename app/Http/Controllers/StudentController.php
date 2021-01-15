<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    public function studentsignup()
    {
        return view('studentsignup');
    }
    public function savestudent()
    {
        echo "jjj";
    }
    public function teachersignup()
    {
        return view('teachersignup');
    }
    public function teacherD()
    {
        return view('teacher.index');
    }
    public function studentD()
    {
        return view('student.studentdeshboard');
    }


}
