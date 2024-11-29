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
        $student=new Student();
        return view('students.create',compact('student'));
    }

    public function store(Request $request){


        // $fname=$request->first_name;
        // $lname=$request->last_name;
        // $student=new Student();
        // $student->first_name=$fname;
        // $student->last_name=$lname;
        // $student->save();



        // echo "<h1>".$fname.' '.$lname."</h1>";
        $data=$request->all();

        if($request->hasFile('img')){
            $file=$request->file('img');
            $dest=public_path('assets/img');
            $file_name=time().'_'. $file->getClientOriginalName();
            $file->move($dest,$file_name);
            $data['image']='/assets/img/'.$file_name;
        }

        Student::create($data);

        return redirect()->route('student.index');

    }
    public function edit($id){
        $student=Student::find($id);
        return view('students.create',compact('student'));
        // echo "Hello Class in Edit Route! ".$id.' Name = '.$name;
    }

    public function update(Request $request,$id){
        $student=Student::find($id);
        $data=$request->all();
        if($request->hasFile('img')){
            $file=$request->file('img');
            $dest=public_path('assets/img');
            $file_name=time().'_'. $file->getClientOriginalName();
            $file->move($dest,$file_name);
            $data['image']='/assets/img/'.$file_name;
        }
        $student->update($data);
        return redirect()->route('student.index');
    }

    public function delete($id){
        $student=Student::find($id);
        $student->delete();
        return redirect()->route('student.index');
    }
}
