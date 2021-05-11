<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>feedback</title>
</head>
<body>
<a href="{{url('/logout')}}" >logout</a>

<h1>Feedback</h1>
<table>
@if(Auth::check())
<div>Hello {{ Auth::user()->email }}</div>
@endif
@foreach($feedbacks as $feedback)
<tr>
    <td>{{ $feedback->id_student }}</td>
    <td>{{ $feedback->fullname }}</td>
    <td>{{ $feedback->name }}</td>
    <td>{{ $feedback->content }}</td>
    <td><a href="{{ url("/feedbacks/{$feedback->id_student}-{$feedback->id_course}/edit") }}">EDIT</a></td>
</tr>
@endforeach
</table>
</body>
</html>