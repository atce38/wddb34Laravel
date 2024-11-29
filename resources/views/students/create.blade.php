@extends('app.master')

@section('content')


<h1>Student Form</h1>


<form action="{{ $student->id ==null? route('student.store') : route('student.update',['id'=>$student->id]) }}" method="post" enctype="multipart/form-data">
@csrf
    <div class="mb-3">
        <label for="first_name" class="form-label">First Name</label>
        <input
            type="text"
            class="form-control "
            name="first_name"
            id="first_name"
            aria-describedby="helpId"
            placeholder="Enter First Name"
            value="{{ $student->first_name }}"
        />
    </div>

    <div class="mb-3">
        <label for="last_name" class="form-label">Last Name</label>
        <input
            type="text"
            class="form-control"
            name="last_name"
            id="last_name"
            aria-describedby="helpId"
            placeholder="Enter Last Name"
            value="{{ $student->last_name }}"
        />
    </div>
    <div>
        <input type="file" name="img">
    </div>
    <input type="submit" class="btn btn-primary" value="Save">

</form>

@endsection
