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
<table>
@if(Auth::check())
<div>Hello {{ Auth::user()->email }}</div>
@endif
@foreach($courses as $course)
<tr>
    <td>{{ $course->id }}</td>
    <td>{{ $course->name }}</td>
    <td><?php switch ($course->status) {
        case '1':
            echo 'Chưa học';
            break;
        case '2':
            echo 'Đang học';
            break;
        case '3':
            echo 'Đã hoàn thành';
            break; 
}?></td>
    <td><a href="{{ url("/feedbacks/{$course->id}") }}">SHOW</a></td>
</tr>
@endforeach
</table>
</body>
</html>