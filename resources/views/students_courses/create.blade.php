<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST" action="{{ url("/students_courses/{$id_course}") }}">
@csrf
@foreach ($students as $student)
    <div>
        <span>{{ $student->id }} - {{ $student->fullname }}</span>
        <input type="checkbox" name="{{ $student->id }}" value="{{ $student->id }}">
    </div>
@endforeach
<button type="submit">OK</button>
</form>
</body>
</html>