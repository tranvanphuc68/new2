<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>salary</title>
</head>
<body>
<a href="{{url('/logout')}}" >logout</a>

<h1>salary</h1>
<table>
@if(Auth::check())
<div>Hello {{ Auth::user()->email }}</div>
@endif
@foreach($salaries as $salary)
<tr>
    <td>{{ $salary->id_teacher }}</td>
    <td>{{ $salary->fullname }}</td>
    <td>{{ $salary->name }}</td>
    <td>{{ $salary->salary }}</td>
    <td><?php echo $salary->status == 1 ? 'Đã nhận': 'Chưa nhận'; ?></td>
    <td><a href="{{ url("/salaries/{$salary->id_teacher}-{$salary->id_course}/edit") }}">EDIT</a></td>
</tr>
@endforeach
</table>
</body>
</html>