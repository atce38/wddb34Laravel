<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        $name="Muhmmad Ali";
        $age=22;
        $students=['Zainab Zahid','Zainab Kamran','Iqra Naz M.Boota'];
        $is_admin=false;

        $studentz=Student::get();
        // return $studentz;
        return view('index',compact('is_admin','name','age','students','studentz'));
    }

    public function show(){
        return view('students.show');
    }

    public function create(){

        return view('students.create');
    }

    public function store(Request $request){


        // $fname=$request->first_name;
        // $lname=$request->last_name;
        // $student=new Student();
        // $student->first_name=$fname;
        // $student->last_name=$lname;
        // $student->save();



        // echo "<h1>".$fname.' '.$lname."</h1>";


        Student::create($request->all());

        return redirect()->route('student.index');

    }
    public function edit($id,$name){

        echo "Hello Class in Edit Route! ".$id.' Name = '.$name;
    }
}
