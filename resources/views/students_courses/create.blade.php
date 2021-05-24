
@extends('layouts.users.app')

@section('title')
Into
@endsection

@section('content')
<article class="content forms-page">
    <div class="card">
        <h1 class="text_IBM">Thêm học viên vào khóa học {{ $course[0]->name}}</h1>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-block">
                <section>
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr class="table-primary">
                                    <th>ID Học Viên</th>
                                    <th>Tên Học Viên</th>
                                    <th>Ngày Sinh</th>
                                    <th>Thêm</th>
                                </tr>
                            </thead>
                            @csrf
                            @foreach ($students as $student)
                                <tr>
                                    <td>{{ $student->id }}</td>
                                    <td>{{ $student->fullname }}</td>
                                    <td>{{ $student->dob }}</td>
                                    <td><input type="checkbox" name="id_student" value="{{ $student->id }}"></td>
                                </tr>
                            @endforeach
                        </table>
                    </div> 
                </section>
                <div style="text-align: right;">
                    <button type="submit" class="btn btn-primary" >Lưu thông tin</button>
                </div>
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