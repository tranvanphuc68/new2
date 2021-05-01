<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST" action="{{url('/users')}}">
@csrf
<input type="text" name="id">id
<input type="text" name="name">name
<input type="text" name="email">email
<input type="text" name="password">password
<input type="text" name="role">role
<button type="submit">OK</button>
</form>
</body>
</html>