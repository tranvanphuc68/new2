<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mark</title>
</head>
<body>
<a href="{{url('/logout')}}" >logout</a>

<h1>mark</h1>
<table>
@if(Auth::check())
<div>Hello {{ Auth::user()->email }}</div>
@endif
@foreach($marks as $mark)
<tr>
    <td>{{ $mark->id_student }}</td>
    <td>{{ $mark->fullname }}</td>
    <td>{{ $mark->name }}</td>
    <td>{{ $mark->mark }}</td>
    <td><a href="{{ url("/marks/{$mark->id_student}-{$mark->id_course}/edit") }}">EDIT</a></td>
</tr>
@endforeach
</table>
</body>
</html>