<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fee</title>
</head>
<body>
<a href="{{url('/logout')}}" >logout</a>

<h1>Fee</h1>
<table>
@if(Auth::check())
<div>Hello {{ Auth::user()->email }}</div>
@endif
<a href="{{ url("/fees/edit") }}">EDIT</a>
@foreach($fees as $fee)
<tr>
    <td>{{ $fee->id_student }}</td>
    <td>{{ $fee->fullname }}</td>
    <td>{{ $fee->name }}</td>
    <td><?php echo $fee->status_fee == 1 ? 'Chưa nộp': 'Đã nộp'; ?></td>
</tr>
@endforeach
</table>
<?php 
    $count = count($fees); 
    $count_sent = 0;
    $count_unsend = 0;
    $sent = 0;
    $unsend = 0;
    for ($i = 0;$i < $count;$i++) {
        if ($fees[$i]->status_fee == 1) {
            $unsend = $unsend + (float)$fees[$i]->fee;
            $count_unsend++;
        }
        else {
            $sent = $sent + (float)$fees[$i]->fee;
            $count_sent++;
        }
    };
?>
<p>Tổng: {{ number_format($sent + $unsend, 0, '', ' ') }}</p>
<p>Đã thu: {{ number_format($sent, 0, '', ' ')}}</p>
<p>Số lượng đã nộp: {{ $count_sent }}</p>
<p>Số lượng đã chưa nộp: {{ $count_unsend }}</p>
</body>
</html>