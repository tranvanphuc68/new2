<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST" action="{{ url("/marks/{$students[0]->id_course}") }}">
@csrf
@method('PUT')
<table>
    @if(Auth::check())
    <div>Hello {{ Auth::user()->email }}</div>
    @endif
    @foreach($students as $student)
    <tr>
        <td>{{ $student->id_student }}</td>
        <td>{{ $student->fullname }}</td>
        <td><input type="text" name ="{{ $student->id_student }}" value="{{ $student->mark }}"></td>
    </tr>
    @endforeach
    </table>


<button type="submit">OK</button>
</form>
</body>
</html>