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
<a href="{{ url("/users/create") }}">create</a>
<table>
@if(Auth::check())
<div>Hello {{ Auth::user()->email }}</div>
<a href="{{ url("/user/self_edit") }}">EDIT</a>
@endif
@foreach($admins as $user)
<tr>
    <td>{{ $user->id }}</td>
    <td>{{ $user->name }}</td>
    <td>{{ $user->email }}</td>
    <td>{{ $user->role }}</td>
    <td><a href="{{ url("/users/{$user->id}") }}">SHOW</a></td>
    <td><a href="{{ url("/users/{$user->id}/edit") }}">EDIT</a></td>
    <td>
        <form method="POST" action="{{ url("/users/{$user->id}") }}">
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