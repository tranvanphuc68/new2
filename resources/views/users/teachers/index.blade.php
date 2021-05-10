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
<a href="{{ url("/users/teacher/create") }}">create</a>

@if(Auth::check())
<div>Hello {{ Auth::user()->fullname }}</div>
<a href="{{ url("/user/self_edit") }}">EDIT</a>
@endif
<h1>TEACHERS</h1>
<table>
    @foreach($teachers as $user)
    <tr>
        <td>{{ $user->id }}</td>
        <td>{{ $user->fullname }}</td>
        <td>{{ $user->email }}</td>
        <td>{{ $user->role }}</td>
        <td><a href="{{ url("/users/{$user->id}") }}">SHOW</a></td>
        <td><a href="{{ url("/users/teacher/{$user->id}/edit") }}">EDIT</a></td>
        <td>
            <form method="POST" action="{{ url("/users/teacher/{$user->id}") }}">
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