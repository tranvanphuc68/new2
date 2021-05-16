<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="{{ url("/salaries/edit/{$salaries[0]->id_teacher}") }}">Edit</a>
    <h1>{{ $salaries[0]->fullname }}</h1>
    <table>
        @foreach ($salaries as $salary)
            <tr>
                <td>{{ $salary->id }}</td>
                <td>{{ $salary->name }}</td>
                <td>{{ $salary->salary }}</td>
                <td><?php echo $salary->status_salary == 1 ? 'Chưa nhận': 'Đã nhận'; ?></td>
            </tr>
        @endforeach
    </table> 
</body>
</html>