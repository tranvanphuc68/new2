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

<h1>USERS</h1>
<a href="{{ url("/users/create") }}">create</a>

@if(Auth::check())
<div>Hello {{ Auth::user()->email }}</div>
@endif
<h1>ATTENDANCE</h1>
<table>
    @foreach($data as $data)
    <tr>
        <td>{{ $data->id_course }}</td>
        <td>{{ $data->number }}</td>
        <td>{{ $data->content }}</td>
        <td><a href="{{ url("/attendance/{$data->id_course}-{$data->number}") }}">ATTENDANCE</a></td>
    </tr>
    @endforeach
</table>
</body>
</html>