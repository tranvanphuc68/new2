<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	
</head>
<body>

@if (count($check) == 0)

<table>
    @foreach($data as $data)
    <tr>
        <td>{{ $id_course }}</td>
        <td>{{ $data->fullname }}</td>
        <td><input type="radio" name="{{ $data->id_student }}" value="0" checked></td>
        <td><input type="radio" name="{{ $data->id_student }}" value="1"></td>
        <td><input type="radio" name="{{ $data->id_student }}" value="2"></td>
    </tr>
    @endforeach
</table>
<button class="btn btn-warning" name='but'>Save</button>
<div></div>

@endif

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

<script>
        $(document).on('click', "button[name='but']", function() {
        statusList = $('input[type=radio]:checked')
        data = []
        for(i=0;i<statusList.length;i++) {
            std = {
                'id_student': $(statusList[i]).attr('name'),
                'status': $(statusList[i]).val(),
            }
            data.push(std)
        }
        data = JSON.stringify(data)
        console.log(data)

        $.ajax({
                url: "{{ url("/attendance") }}",
                method: 'POST',
                data:{
                    '_token': '{{ csrf_token() }}',
                    'data' : data,
                    'id_course' : {{$id_course}},
                    'number' : {{$number}}
                },
                success: function(res) {
                    location.assign("{{ url("/attendance") }}")
                },
                error: function(err) {
                    console.error(err)
                }
            });  
        })
    

</script>
</body>
</html>
