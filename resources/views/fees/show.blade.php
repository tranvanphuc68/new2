<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="{{ url("/fees/edit/{$students[0]->id_course}") }}">Edit</a>
    <h1>{{ $students[0]->name }}</h1>
    <table>
        @foreach ($students as $student)
            <tr>
                <td>{{ $student->id_student }}</td>
                <td>{{ $student->fullname }}</td>
                <td>{{ $student->fee }}</td>
                <td><?php echo $student->status_fee == 1 ? 'Chưa nộp': 'Đã nộp'; ?></td>
            </tr>
        @endforeach
    </table>
    
    <?php 
    $count = count($students); 
    $count_sent = 0;
    $count_unsend = 0;
    $sent = 0;
    $unsend = 0;
    for ($i = 0;$i < $count;$i++) {
        if ($students[$i]->status_fee == 1) {
            $unsend = $unsend + (float)$students[$i]->fee;
            $count_unsend++;
        }
        else {
            $sent = $sent + (float)$students[$i]->fee;
            $count_sent++;
        }
    };
?>
<p>Tổng: {{ number_format($sent + $unsend, 0, '', ' ') }}</p>
<p>Đã thu: {{ number_format($sent, 0, '', ' ')}}</p>
<p>Số lượng đã nộp: {{ $count_sent }}</p>
<p>Số lượng chưa nộp: {{ $count_unsend }}</p>
    
        
</body>
</html>