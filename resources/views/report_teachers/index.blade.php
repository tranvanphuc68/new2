<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>report_teacher</title>
</head>
<body>
<a href="{{url('/logout')}}" >logout</a>

<h1>Report Teacher</h1>
<table>
@if(Auth::check())
<div>Hello {{ Auth::user()->email }}</div>
@endif
@foreach($report_teachers as $report_teacher)
<tr>
    <td>{{ $report_teacher->id_student }}</td>
    <td>{{ $report_teacher->fullname }}</td>
    <td>{{ $report_teacher->name }}</td>
    <td>{{ $report_teacher->content }}</td>
    <td><a href="{{ url("/report_teachers/{$report_teacher->id_student}-{$report_teacher->id_course}/edit") }}">EDIT</a></td>
</tr>
@endforeach
</table>
</body>
</html>