@extends('app.master')

@section('content')

<div>
    <h1>Hello Class from Controller inside Index View</h1>
    <h2> {{  $name }} </h2>
    <h3> {{ $age }} </h3>

    @foreach ($students as $student)
    <h4> {{ $student }} </h4>
    @endforeach

    @if ($is_admin)
    <h1>Hello Admin!</h1>
    @else
    <h1>Hello User!</h1>
    @endif

</div>

<div class="container">
    <div>
        <a class="btn btn-primary" href="{{ route('student.create') }}">Create</a>
    </div>
    <div
        class="table-responsive"
    >
        <table
            class="table table-striped table-hover align-middle"
        >
            <thead class="table-dark">
                <caption>
                    Student Record
                </caption>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">

                @foreach ($studentz as $stu)
                <tr>
                    <td>{{ $stu->id }}</td>
                    <td><img width="100" src="{{ $stu->image }}" alt=""> {{ $stu->first_name }}</td>
                    <td>{{ $stu->last_name }}</td>
                    <td><a class="btn btn-primary" href="{{ route('student.edit',['id'=>$stu->id]) }}">Edit</a><a href="{{ route('student.delete',['id'=>$stu->id]) }}" class="btn btn-danger">Delete</a></td>
                </tr>
                @endforeach

            </tbody>
            <tfoot>

            </tfoot>
        </table>
        <div>
            {{ $studentz->links('pagination::bootstrap-5') }}
        </div>
    </div>


</div>
{{-- @include('students.show') --}}

@endsection
