<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if (count($students) != 0)
        <a href="{{ url("/students_courses/create/{$students[0]->id_course}") }}">add</a>
        <h1>{{ $students[0]->name }}</h1>
        <table>
        
        @foreach ($students as $student)
            <tr>
                <td>{{ $student->id_student }}</td>
                <td>{{ $student->fullname }}</td>
                <td>
                    <form method="POST" action="{{ url("/students_courses/{$student->id_student}-{$student->id_course}") }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit">DELETE</button>
                    </form>
                </td>
            </tr>
        @endforeach
    @else <a href="{{ url("/students_courses/create/{$id_course}") }}">add</a>
    <p>null</p>
    @endif
    </table>
    
        
</body>
</html>