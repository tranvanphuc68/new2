<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST" action="{{url("/detail_course/{$course->id_course}-{$course->number}")}}">
@csrf
@method('PUT')
<div>{{ $course->id_course }}</div>
<input type="date" name="date" value="{{ $course->date }}">date
<input type="text" name="content" value="{{ $course->content }}">content

<button type="submit">OK</button>
</form>
</body>
</html>