<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<a href="{{url('/logout')}}" >logout</a>

<h1>DETAIL COURSES</h1>
<a href="{{ url("/detail_course/create") }}">create</a>
<table>
@if(Auth::check())
<div>Hello {{ Auth::user()->email }}</div>
@endif
@foreach($detail as $detail)
<tr>
    <td>{{ $detail->id_course }}</td>
    <td>{{ $detail->number }}</td>
    <td>{{ $detail->content }}</td>
    <td>{{ $detail->date }}</td>
    <td><a href="{{ url("/detail_course/{$detail->id_course}-{$detail->number}/edit") }}">EDIT</a></td>
    <td>
        <form method="POST" action="{{ url("/detail_course/{$detail->id_course}-{$detail->number}") }}">
            @csrf
            @method('DELETE')
            <button type="submit">DELETE</button>
        </form>
    </td>
    

</tr>
@endforeach
</table>
</body>
</html>