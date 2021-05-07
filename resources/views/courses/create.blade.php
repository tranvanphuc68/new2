<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST" action="{{ url("/courses") }}">
@csrf
<div><input type="text" name="id">id</div>
<div><input type="text" name="name">name</div>
<div><input type="text" name="id_teacher">id_teacher</div>
<div><input type="text" name="description">description</div>
<div><input type="text" name="timetable">timetable</div>
<div><input type="text" name="max_students">max_students</div>
<div><input type="text" name="sum_time">sum_time</div>
<div><input type="text" name="lessons">lessons</div>
<div><input type="text" name="fee">fee</div>
<div><input type="text" name="salary">salary</div>
<div><input type="text" name="status">status</div>

<button type="submit">OK</button>
</form>
</body>
</html>