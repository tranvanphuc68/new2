
@extends('layouts.users.app')

@section('title')
Into
@endsection

@section('content')
<article class="content forms-page">
    <div class="card">
        <h1 class="text-IBM" >Thêm học viên vào khóa học {{ $course[0]->name}}</h1>
    </div>
    <p>Số lượng học viên hiện tại: {{ $countStu }}/{{$max}}</p>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-block">
                <section>
                    <div class="card-title-block" class="right">
                        <form role="search" >
                            <div  class="input-container">
                                <input type="text" class="search" name="search" placeholder="Search by last name" value="<?php if (isset($_GET['search'])) { echo $_GET['search'];} ?>">
                                <div class="underline"></div>
                            </div>
                        </form>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr class="table-primary">
                                    <th class="w15">ID Học Viên</th>
                                    <th class="w40">Tên Học Viên</th>
                                    <th class="w25">Ngày Sinh</th>
                                    <th class="w20">Thêm</th>
                                </tr>
                            </thead>
                            @csrf
                            @foreach ($students as $student)
                                <tr>
                                    <td class="w15">{{ $student->id }}</td>
                                    <td class="w40">{{ $student->first_name." ".$student->last_name }}</td>
                                    <td class="w25">{{ $student->dob }}</td>
                                    <td class="w20"><input type="checkbox" name="id_student" value="{{ $student->id }}"></td>
                                </tr>
                            @endforeach
                        </table>
                    </div> 
                </section>
                <div class="right">
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
        max = {{ $max }}
        countStu = {{ $countStu }}
        limit = max - countStu
        addedStudent = $('input[type=checkbox]:checked')
        data = []
        countAddedStudent = addedStudent.length
        check = countAddedStudent - limit
        if (check > 0) {
            alert("Bạn chỉ có thể thêm " + limit + " học viên! \nBạn đang vượt quá " + check + " học viên");
            return
        }
        else {
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
            }
        })
</script>

@endsection