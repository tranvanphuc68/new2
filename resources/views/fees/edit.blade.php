<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST" action="{{url("/fees")}}">
@csrf
@method('PUT')
<table>
    @if(Auth::check())
    <div>Hello {{ Auth::user()->email }}</div>
    @endif
    @foreach($fees as $fee)
    <tr>
        <td>{{ $fee->id_student }}</td>
        <td>{{ $fee->fullname }}</td>
        <td>{{ $fee->name }}</td>
        <td>{{ $fee->fee }}</td>
        <td>
            <label for="">status_fee</label>
            <input type="radio" id="<?php echo $fee->id_student . $fee->id_course ?>_1" name ="<?php echo $fee->id_student . $fee->id_course?>_status_fee" value="1" <?php echo ($fee->status_fee == 1) ? 'checked' : ''?>>
            <label for="<?php echo $fee->id_student ?>_1">Chưa nộp</label>
            <input type="radio" id="<?php echo $fee->id_student . $fee->id_course ?>_2" name ="<?php echo $fee->id_student . $fee->id_course?>_status_fee" value="2" <?php echo ($fee->status_fee == 2) ? 'checked' : ''?>>
            <label for="<?php echo $fee->id_student ?>_2">Đã nộp</label>
        </td>
    </tr>
    @endforeach
    </table>


<button type="submit">OK</button>
</form>
</body>
</html>