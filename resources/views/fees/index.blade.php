<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fee</title>
</head>
<body>
<a href="{{url('/logout')}}" >logout</a>

<h1>Fee</h1>
<table>
@if(Auth::check())
<div>Hello {{ Auth::user()->email }}</div>
@endif
@foreach($fees as $fee)
<tr>
    <td>{{ $fee->id_student }}</td>
    <td>{{ $fee->fullname }}</td>
    <td>{{ $fee->name }}</td>
    <td>{{ $fee->fee }}</td>
    <td><?php if($fee->status == 1){echo 'Đã nộp';} ?></td>
    <td><a href="{{ url("/fees/{$fee->id_student}-{$fee->id_course}/edit") }}">EDIT</a></td>
</tr>
@endforeach
</table>
</body>
</html>