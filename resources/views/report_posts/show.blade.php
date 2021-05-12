<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
@if(Auth::check())
<div>Hello {{ Auth::user()->email }}</div>
@endif

<h4>POST</h4>

<h3>{{ $post->fullname }}</h3>
<div>{{ $post->content }}</div>

<div>
    <form method="POST" action="{{ url("/posts/{$post->id}") }}">
        @csrf
        @method('DELETE')
        <button type="submit">DELETE POST</button>
    </form>
</div>

<h4>ALL REPORT</h4>
@foreach ($report_posts as $report_post)
    
        <td>{{ $report_post->fullname }}</td>
        <td>{{ $report_post->content }}</td><br>
@endforeach


    
</body>
</html>