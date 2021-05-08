<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST" action="{{ url("/comments") }}">
@csrf
<div><input type="text" name="id">id</div>
<div><input type="text" name="id_post">id_post</div>
<div><input type="text" name="content">Content</div>

<button type="submit">OK</button>
</form>
</body>
</html>