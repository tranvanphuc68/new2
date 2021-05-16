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

    <h1>Salary</h1>
    @if(Auth::check())
    <div>Hello {{ Auth::user()->email }}</div>
    @endif
    <table>
    @if (Auth::user()->role == 'Teacher')
        @foreach($salaries as $salary)
        <tr>
            <td>{{ $salary->id }}</td>
            <td>{{ $salary->name }}</td>
            <td><?php echo $salary->status_salary == 1 ? 'Chưa nhận': 'Đã nhận'; ?></td>
        </tr>
        @endforeach
    @else
        @foreach($teachers as $teacher)
            <tr>
                <td>{{ $teacher->id }}</td>
                <td>{{ $teacher->fullname }}</td>
                
                <td><a href="{{ url("/salaries/{$teacher->id}") }}">SHOW</a></td>
            </tr>
        @endforeach
    @endif
    </table>
</body>
</html>