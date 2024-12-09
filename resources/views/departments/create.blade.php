<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Department</title>
</head>
<body>
    <h1>Edit Department</h1>
    <form action="{{$department->id !=null? route('departments.update', $department): route('departments.store') }}" method="POST">
        @csrf
        @if ($department->id !=null)
        @method('PUT')
        @endif


        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="{{ $department->name }}" required>

        <label for="description">Description</label>
        <textarea name="description" id="description">{{ $department->description }}</textarea>

        <button type="submit">Update</button>
    </form>
    <a href="{{ route('departments.index') }}">Back to List</a>
</body>
</html>
