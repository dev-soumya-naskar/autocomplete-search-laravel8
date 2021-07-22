<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function addStudent(){
        $students = [
            ['name'=>'Shakib'],
            ['name'=>'Shakti'],
            ['name'=>'Olivia'],
            ['name'=>'Emaly'],
            ['name'=>'Elizabeth'],
            ['name'=>'Sofia'],
            ['name'=>'Madison'],
            ['name'=>'Lily'],
            ['name'=>'Lucy']
        ];
        Student::insert($students);
        return "Student Inserted";
    }
    public function search(){
        return view('search');
    }
    public function studentSearch(Request $request){
        $data = Student::select("name")->where("name","LIKE","%{$request->value}%")->get();
        return response()->json($data);
    }
}
