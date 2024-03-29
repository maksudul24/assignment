<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\student_informations;

class StudentInfoController extends Controller
{
    //
    public function index(){
        $student = student_informations::all();
        return view('StudentInfo.index',['students' => $student]);
    }

    public function create(){
        return view('StudentInfo.create');
    }

    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'class' => 'required',
            'marks' => 'required'
        ]);

        $newProduct = student_informations::create($data);

        return redirect(route('StudentInfo.index'));
    }

    public function edit(student_informations $student){
        return view('StudentInfo.edit',['student' => $student]);
    }

     public function update(student_informations $student, Request $request){
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'class' => 'required',
            'marks' => 'required'
        ]);

        $student->update($data);

        return redirect(route('StudentInfo.index'))->with('success', 'Student Information Updated Succesffully');

    }

    public function destroy(student_informations $student){
        $student->delete();
        return redirect(route('StudentInfo.index'))->with('success', 'Student Information deleted Succesffully');
    }
}
