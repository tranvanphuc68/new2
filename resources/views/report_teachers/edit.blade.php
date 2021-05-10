<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST" action="{{url("/report_teachers/{$report_teacher->id_student}-{$report_teacher->id_course}")}}">
@csrf
@method('PUT')
<div>
    <label for="">id_student</label>
    <input type="text" name="id_student" value="{{ $report_teacher->id_student }}">
</div>
<div>
    <label for="">id_course</label>
    <input type="text" name="id_course" value="{{ $report_teacher->id_course }}">
</div>
<div>
    <label for="">content</label>
    <input type="text" name="content" value="{{ $report_teacher->content }}">
</div>

<button type="submit">OK</button>
</form>
</body>
</html>