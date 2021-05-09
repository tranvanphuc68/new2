<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<a href="{{url('/logout')}}" >logout</a>

<h1>Students Courses</h1>
<a href="{{ url("/students_courses/create") }}">create</a>
<table>
@if(Auth::check())
<div>Hello {{ Auth::user()->email }}</div>
@endif
@foreach($students_courses as $student_course)
<tr>
    <td>{{ $student_course->id_student }}</td>
    <td>{{ $student_course->fullname }}</td>
    <td>{{ $student_course->name }}</td>
    <td><a href="{{ url("/students_courses/{$student_course->id_student}") }}">SHOW</a></td>
    <td><a href="{{ url("/students_courses/{$student_course->id_student}/edit") }}">EDIT</a></td>
    <td>
        <form method="POST" action="{{ url("/students_courses/{$student_course->id_student}") }}">
            @csrf
            @method('DELETE')
            <button type="submit">DELETE</button>
        </form>
    </td>
</tr>
@endforeach
</table>
</body>
</html>