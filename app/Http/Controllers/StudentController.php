<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        $name="Muhmmad Ali";
        $age=22;
        $students=['Zainab Zahid','Zainab Kamran','Iqra Naz M.Boota'];
        $is_admin=false;

        return view('index',compact('is_admin','name','age','students'));
    }

    public function show(){
        return view('students.show');
    }

    public function create(){

        return view('students.create');
    }

    public function store(Request $request){

        $fname=$request->first_name;
        $lname=$request->last_name;

        echo "<h1>".$fname.' '.$lname."</h1>";

    }
    public function edit($id,$name){

        echo "Hello Class in Edit Route! ".$id.' Name = '.$name;
    }
}
