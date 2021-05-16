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
    <h1>Mark</h1>
    <table>
    @if(Auth::check())
    <div>Hello {{ Auth::user()->email }}</div>
    @endif

    @if (Auth::user()->role == 'Student')
        @foreach ($marks as $mark)
            <tr>
                <td>{{ $mark->id_course}}</td>
                <td>{{ $mark->name }}</td>
                <td>{{ $mark->mark }}</td>
            </tr>
        @endforeach
    @else
        @if (Auth::user()->role == 'Admin')
                @foreach($courses as $course)
                <tr>
                    <td>{{ $course->id }}</td>
                    <td>{{ $course->name }}</td>
                    <td><a href="{{ url("/marks/{$course->id}") }}">SHOW</a></td>
                </tr>
                @endforeach  
            @else  
                @foreach($teachers as $teacher)
                <tr>
                    <td>{{ $teacher->id }}</td>
                    <td>{{ $teacher->name }}</td>
                    <td><a href="{{ url("/marks/{$teacher->id}") }}">SHOW</a></td>
                </tr>
                @endforeach 
        @endif
    @endif

    </table>
</body>
</html>