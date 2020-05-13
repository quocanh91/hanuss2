@extends ('layout')

@section ('content')
<h2>Beo Guitar Student List</h2>
<table>
    <tr>
        <th>Name</th>
        <th>Birthday</th>
        <th>Email</th>
        <th>Course</th>
    </tr>
    @foreach ($students as $student)
    <tr>
        <td>{{ $student->name }}</td>
        <td>{{ $student->birthday }}</td>
        <td>{{ $student->email }}</td>
        <td>{{ $student->course }}</td>
    </tr>
    @endforeach
</table>
@endsection