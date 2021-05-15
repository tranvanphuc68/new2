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
            <h1>{{ $students[0]->name }}</h1>
        @if (Auth::user()->role == 'Admin')
        <table>
            @foreach($students as $student)
            <tr>
                <td>{{ $student->id_student }}</td>
                <td>{{ $student->fullname }}</td>
                <td>{{ $student->name }}</td>
                <td>{{ $student->feedback }}</td>
                <td></td>
            </tr>
            @endforeach
        </table> 
        @else
        <p>{{ $feedback[0]->feedback}}</p>
            @if ($feedback[0]->status == 3)
                <a href="{{ url("/feedbacks/edit/{$feedback[0]->id_course}") }}">EDIT</a>
            @endif   
        @endif
    @else
        <p>null</p>
    @endif