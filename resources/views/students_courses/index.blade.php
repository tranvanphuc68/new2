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
    @if (Auth::user()->role == 'Student')
        @foreach ($student_courses as $student_course)
            <tr>
                <td>{{ $student_course->id_course}}</td>
                <td>{{ $student_course->name }}</td>
                <td><?php switch ($student_course->status) {
                                    case '1':
                                        echo 'Chưa học';
                                        break;
                                    case '2':
                                        echo 'Đang học';
                                        break;
                                    case '3':
                                        echo 'Đã hoàn thành';
                                        break; 
                        }?>
                </td>
            </tr>
        @endforeach
    @else
        @if (Auth::user()->role == 'Admin')
            @foreach($courses as $course)
            <tr>
                <td>{{ $course->id }}</td>
                <td>{{ $course->name }}</td>
                <td><?php echo $course->status == 1 ? 'Chưa học': 'Đang học'; ?></td>
                <td><a href="{{ url("/students_courses/{$course->id}") }}">SHOW</a></td>
            </tr>
            @endforeach
        @else 
            @foreach($teachers as $teacher)
            <tr>
                <td>{{ $teacher->id }}</td>
                <td>{{ $teacher->name }}</td>
                <td><?php echo $teacher->status == 1 ? 'Chưa học': 'Đang học'; ?></td>
                <td><a href="{{ url("/students_courses/{$teacher->id}") }}">SHOW</a></td>
            </tr>
            @endforeach
        @endif
    @endif
</table>
</body>
</html>