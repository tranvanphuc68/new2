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

<h1>jeelp</h1>
<a href="{{ url('/users/create')}}">create</a>
<table>
@if(Auth::check())
<div>Hello {{ Auth::user()->email }}</div>
@endif
@foreach($admins as $user)
<tr>
    <td>{{ $user->id }}</td>
    <td>{{ $user->name }}</td>
    <td>{{ $user->email }}</td>
    <td>{{ $user->role }}</td>
</tr>
@endforeach
</table>
</body>
</html>