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

@include('students.show')

@endsection
