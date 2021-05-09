<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST" action="{{ url("/students_courses") }}">
@csrf
<div><input type="text" name="id_student">id_student</div>
<div><input type="text" name="id_course">id_course</div>

<button type="submit">OK</button>
</form>
</body>
</html>