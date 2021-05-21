<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>All Post had been reported({{ $countPostHadBeenReported }})</h2>
    <table>
    @foreach ($posts as $post)
        <tr>
            <td>{{ $post->fullname }}</td>
            <td>{{ $post->title }}</td>
            <td>{{ $post->content }}</td>
        </tr>
        <td><a href="{{ url("/report_posts/{$post->id}") }}">Show</a></td>
        @endforeach
    </table>
        
    </div>
</body>
</html>