<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    <td>{{ $fee->fee }}</td>
    <td>{{ $fee->status }}</td>
    <td><a href="{{ url("/fees/{$fee->id_student}/edit") }}">EDIT</a></td>
    <td>
        <form method="POST" action="{{ url("/fees/{$fee->id_student}") }}">
            @csrf
            @method('DELETE')
            <button type="submit">DELETE</button>
        </form>
    </td>
</tr>
@endforeach
</table>
</body>
</html>