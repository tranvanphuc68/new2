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

    <h1>Fee</h1>
    @if(Auth::check())
    <div>Hello {{ Auth::user()->email }}</div>
    @endif
    <table>
    @if (Auth::user()->role == 'Student')
        @foreach($fees as $fee)
        <tr>
            <td>{{ $fee->id_course }}</td>
            <td>{{ $fee->name }}</td>
            <td><?php echo $fee->status_fee == 1 ? 'Chưa nộp': 'Đã nộp'; ?></td>
        </tr>
        @endforeach
    @else
        @foreach($courses as $course)
            <tr>
                <td>{{ $course->id }}</td>
                <td>{{ $course->name }}</td>
                <td><?php echo $course->status == 1 ? 'Chưa học': 'Đang học'; ?></td>
                <td><a href="{{ url("/fees/{$course->id}") }}">SHOW</a></td>
            </tr>
        @endforeach
    @endif
    </table>
</body>
</html>