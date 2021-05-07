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

<h1>COURSES</h1>
<a href="{{ url("/courses/create") }}">create</a>
<table>
@if(Auth::check())
<div>Hello {{ Auth::user()->email }}</div>
@endif
@foreach($courses as $course)
<tr>
    <td>{{ $course->id }}</td>
    <td>{{ $course->name }}</td>
    <td>{{ $course->fullname }}</td>
    <td>{{ $course->description }}</td>
    <td>{{ $course->timetable }}</td>
    <td>{{ $course->max_students }}</td>
    <td>{{ $course->sum_time }}</td>
    <td>{{ $course->lessons }}</td>
    <td>{{ $course->fee }}</td>
    <td>{{ $course->salary }}</td>
    <td><a href="{{ url("/courses/{$course->id}") }}">SHOW</a></td>
    <td><a href="{{ url("/courses/{$course->id}/edit") }}">EDIT</a></td>
    <td>
        <form method="POST" action="{{ url("/courses/{$course->id}") }}">
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