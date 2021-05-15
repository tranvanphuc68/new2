<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

@csrf
@foreach ($students as $student)
    <div>
        <span>{{ $student->id }} - {{ $student->fullname }}</span>
        <input type="checkbox" name="id_student" value="{{ $student->id }}">
    </div>
@endforeach
<button type="submit">OK</button>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script>

$(document).on('click', "button", function() {
        addedStudent = $('input[type=checkbox]:checked')
        data = []
        for(i=0;i<addedStudent.length;i++) {
            std = {
                'id_student': $(addedStudent[i]).val(),
            }
            data.push(std)
        }
        data = JSON.stringify(data)
        console.log(data)
        $.ajax({
                url: "{{ url("/students_courses") }}",
                method: 'POST',
                data:{
                    '_token': '{{ csrf_token() }}',
                    'data' : data,
                    'id_course': {{ $id_course }}
                },
                success: function(res) {
                    location.assign("{{ url("/students_courses/{$id_course}") }}")
                },
                error: function(err) {
                    console.error(err)
                }
            });  
        })

</script>
</body>
</html>