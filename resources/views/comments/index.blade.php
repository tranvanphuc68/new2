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
<a href="{{ url("/comments/create") }}">createComment</a>
<table>
@forelse ($comments as $comment)
    <tr>
        <td>{{ $comment->id }}</td>
        <td>{{ $comment->content }}</td>
        
        <td><a href="{{ url("/comments/{$comment->id}/edit") }}">EDIT</a></td>
        <td>
            <form method="POST" action="{{ url("/comments/{$comment->id}") }}">
                @csrf
                @method('DELETE')
                <button type="submit">DELETE</button>
            </form>
        </td>
    </tr>
</table>
@empty
    <h1>Nothing</h1>
@endforelse
    
</div>
</body>
</html>