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
        <a href="{{ url("/fees/edit/{$students[0]->id_course}") }}">Edit</a>
    <h1>{{ $students[0]->name }}</h1>
    <table>
        @foreach ($students as $student)
            <tr>
                <td>{{ $student->id_student }}</td>
                <td>{{ $student->fullname }}</td>
                <td>{{ $student->fee }}</td>
                <td><?php echo $student->status_fee == 1 ? 'Chưa nộp': 'Đã nộp'; ?></td>
            </tr>
        @endforeach
    </table>
    @else
        <p>Null</p>
    @endif
</body>
</html>