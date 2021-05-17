<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST" action="{{ url("/posts") }}">
@csrf

<div><input type="text" name="title">Title</div>
<div><input type="text" name="content">Content</div>

<button type="submit">OK</button>
</form>
</body>
</html>