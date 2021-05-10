<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</head>
<body>

    @csrf
<table>
    @foreach($data as $data)
    <tr>
        <td>{{ $data->id_course }}</td>
        <td>{{ $data->fullname }}</td>
        <td><input type="radio" name="{{ $data->id_student }}" value="0" checked></td>
        <td><input type="radio" name="{{ $data->id_student }}" value="1"></td>
        <td><input type="radio" name="{{ $data->id_student }}" value="2"></td>
    </tr>
    @endforeach
</table>
<button class="btn btn-warning" onclick="submitData()" >Save</button>

<script>
    
    function submitData() {
        statusList = jQuery('input[type=radio]:checked')
        data = []
        for(i=0;i<statusList.length;i++) {
            std = {
                'id_student': jQuery(statusList[i]).attr('name'),
                'status': jQuery(statusList[i]).val(),
            }
            data.push(std)
        }
        console.log(data)

        $.post("{{ url("/attendance") }}", {
            '_token': "{{ csrf_token() }}",
            'data': JSON.stringify(data),
        }, function(dt) {
            
        })
    } 
</script>
</body>
</html>
