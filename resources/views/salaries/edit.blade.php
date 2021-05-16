<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST" action="{{url("/salaries/{$teachers[0]->id_teacher}")}}">
@csrf
@method('PUT')
<table>
    @if(Auth::check())
    <div>Hello {{ Auth::user()->email }}</div>
    @endif
    @foreach($teachers as $teacher)
    <tr>
        <td>{{ $teacher->id }}</td>
        <td>{{ $teacher->name }}</td>
        <td>{{ $teacher->salary }}</td>
        <td>
            <label for="">status_salary</label>
            <input type="radio" id="{{$teacher->id_teacher}}_1" name ="{{$teacher->id}}" value="1" <?php echo ($teacher->status_salary == 1) ? 'checked' : ''?>>
            <label for="{{$teacher->id_teacher}}_1">Chưa nhận</label>
            <input type="radio" id="{{$teacher->id_teacher}}_2" name ="{{$teacher->id}}" value="2" <?php echo ($teacher->status_salary == 2) ? 'checked' : ''?>>
            <label for="{{$teacher->id_teacher}}_2">Đã nhận</label>
        </td>
    </tr>
    @endforeach
    </table>
<button type="submit">OK</button>
</form>
</body>
</html>