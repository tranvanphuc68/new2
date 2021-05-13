<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST" action="{{url("/marks")}}">
@csrf
@method('PUT')
<table>
    @if(Auth::check())
    <div>Hello {{ Auth::user()->email }}</div>
    @endif
    @foreach($marks as $mark)
    <tr>
        <td>{{ $mark->id_student }}</td>
        <td>{{ $mark->fullname }}</td>
        <td>{{ $mark->name }}</td>
        <td><input type="text" name ="<?php echo $mark->id_student . $mark->id_course?>_mark" value="{{ $mark->mark }}"></td>
    </tr>
    @endforeach
    </table>


<button type="submit">OK</button>
</form>
</body>
</html>