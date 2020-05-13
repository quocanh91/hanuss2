<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use Illuminate\Support\Str;

class StudentsController extends Controller
{
    public function index(){
        $student = Student::all();
        return view('students.index', ['students' => $student]);
    }

    public function show() {

    }

    public function create() {
        return view('students.create');
    }
    
    public function store(){
        $student = new Student();

        $student->name = request('name');
        $student->email = request('email');
        $student->birthday = request('birthday');
        $student->course = request('course');

        $student->save();

        return redirect('/student');
    }

    public function edit($id){
        $student = Student::find($id);
        return view('students.edit', ['student' => $student]);
    }
    
    public function update($id){
        $student = Student::find($id);
        $student->name = request('name');
        $student->email = request('email');
        $student->birthday = request('birthday');
        $student->course = request('course');

        $student->save();

        return redirect('/student');
    }

    public function destroy(){

    }
}
