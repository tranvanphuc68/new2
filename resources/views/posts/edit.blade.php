<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST" action="{{url("/posts/$post->id")}}">
@csrf
@method('PUT')
<input type="textarea" name="title" value="{{ $post->title }}">title
<input type="textarea" name="content" value="{{ $post->content }}">content

<button type="submit">OK</button>
</form>
</body>
</html>