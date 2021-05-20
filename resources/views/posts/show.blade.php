<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="{{ url("/posts/create") }}">createPost</a>
@if(Auth::check())
<div>Hello {{ Auth::user()->email }}</div>
@endif
        <h3>{{ $post->fullname }}</h3>
        <h2>{{ $post->title }}</h2>
        <div>{{ $post->content }}</div>

        <div><a href="{{ url("/posts/{$post->id}/self_edit") }}">EDIT</a></div>
        <div>
            <form method="POST" action="{{ url("/posts/{$post->id}") }}">
                @csrf
                @method('DELETE')
                <button type="submit">DELETE</button>
            </form>
        </div>
        <td><a href="{{ url("/report_posts/{$post->id}/create") }}">REPORT</a>({{ $countReportPost }})</td>
        
        <h4>Comments({{ $countComment }})</h4>
        
        <table>
            @foreach ($comments as $comment)
                <tr>
                    <td>{{ $comment->fullname }}</td>
                    <td>{{ $comment->content }}</td>
                
                    <td><a href="{{ url("/comments/{$comment->id}/self_edit") }}">EDIT</a></td>
                    <td>
                        <form method="POST" action="{{ url("/comments/{$comment->id}") }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit">DELETE</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    
<form method="POST" action="{{ url("/comments/{$post->id}") }}">
    @csrf
    <div><input type="text" name="content">Content</div>
    
    <button type="submit">OK</button>
</form>
    
</body>
</html>