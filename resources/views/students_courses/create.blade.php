
@extends('layouts.users.app')

@section('title')
Into
@endsection

@section('content')
<article class="content forms-page">
    <div class="title-block">
        <h1 class="title">THÊM HỌC VIÊN VÀO KHÓA HỌC</h1>
    </div>
    <div class="row sameheight-container">
        <div class="col-md-9">
            <div class="card card-block sameheight-item">
                <form action="{{ url("/students_courses/create/{$id_course->id}") }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @foreach ($students as $student)
                        <div class="form-group">
                            <span>{{ $student->id }} - {{ $student->fullname }}</span>
                            <input type="checkbox" name="id_student" value="{{ $student->id }}">
                        </div>
                    @endforeach
                    <div style="text-align: right;">
                        <button type="submit" class="btn btn-primary" name="save">Lưu thông tin</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</article>

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

@endsection