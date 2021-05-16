<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <a href="{{ url("/posts/create") }}">createPost</a>
@if(Auth::check())
<div>Hello {{ Auth::user()->email }}</div>
@endif
<table>
@foreach ($posts as $post)
    <tr>
        <td>{{ $post->fullname }}</td>
        <td>{{ $post->content }}</td>
        
        <td><a href="{{ url("/posts/{$post->id}") }}">Show</a></td>
        
        <td><button><a href="{{ url("/posts/{$post->id}/self_edit") }}">EDIT</a></button></td>
        <td>
            <form method="POST" action="{{ url("/posts/{$post->id}") }}">
                @csrf
                @method('DELETE')
                <button type="submit">DELETE</button>
            </form>
        </td>
        <td><a href="{{ url("/report_posts/{$post->id}/create") }}">REPORT</a></td>
    </tr>
    @endforeach
</table>
    
</div>
</body>
</html>