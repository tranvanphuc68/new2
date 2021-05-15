<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if (Auth::user()->role == 'Teacher')
        <a href="{{ url("/marks/edit/{$students[0]->id_course}") }}">Edit</a>
    @endif
    <h1>{{ $students[0]->name }}</h1>
    <table>
        @foreach($students as $student)
            <tr>
                <td>{{ $student->id_student }}</td>
                <td>{{ $student->fullname }}</td>
                <td>{{ $student->name }}</td>
                <td>{{ $student->mark }}</td>
            </tr>
        @endforeach
    </table>

</body>
</html>