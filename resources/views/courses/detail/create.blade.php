<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST" action="{{ url("/detail_course") }}">
@csrf
<div><input type="text" name="id_course">id</div>
<div><input type="text" name="number">number</div>
<div><input type="text" name="content">content</div>
<div><input type="date" name="date">date</div>


<button type="submit">OK</button>
</form>
</body>
</html>