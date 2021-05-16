<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST" action="{{url("/fees/{$students[0]->id_course}")}}">
@csrf
@method('PUT')
<table>
    @if(Auth::check())
    <div>Hello {{ Auth::user()->email }}</div>
    @endif
    @foreach($students as $student)
    <tr>
        <td>{{ $student->id_student }}</td>
        <td>{{ $student->fullname }}</td>
        <td>{{ $student->name }}</td>
        <td>{{ $student->fee }}</td>
        <td>
            <label for="">status_fee</label>
            <input type="radio" id="{{$student->id_student}}_1" name ="{{$student->id_student}}" value="1" <?php echo ($student->status_fee == 1) ? 'checked' : ''?>>
            <label for="{{$student->id_student}}_1">Chưa nộp</label>
            <input type="radio" id="{{$student->id_student}}_2" name ="{{$student->id_student}}" value="2" <?php echo ($student->status_fee == 2) ? 'checked' : ''?>>
            <label for="{{$student->id_student}}_2">Đã nộp</label>
        </td>
    </tr>
    @endforeach
    </table>


<button type="submit">OK</button>
</form>
</body>
</html>