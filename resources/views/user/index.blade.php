@extends('layouts.app')
@section('content')

<div>
    <form>
        <select name="department_id" >
            <option value="{{ null }}">Select Department</option>
            @foreach ($departments as $department)
            <option {{ request()->department_id ==$department->id?'selected':'' }} value="{{ $department->id }}">{{ $department->name }}</option>
            @endforeach
        </select>
        <input type="text" name="s_earch" placeholder="Search By name.." value="{{ request()->s_earch }}">
        <input type="submit" value="Search">
    </form>
</div>
<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Department</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user )
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->department }}</td>
        </tr>
        @endforeach

    </tbody>
</table>

@if ($users->count()< 1)
<div class="text-danger text-center h4">
    No Data Found!
</div>

@endif

@endsection
