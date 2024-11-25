@extends('app.master')

@section('content')


<h1>Student Form</h1>

<form action="{{ route('student.store') }}" method="post">
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
        />
    </div>
    <input type="submit" class="btn btn-primary" value="Save">

</form>

@endsection
