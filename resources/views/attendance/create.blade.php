
@extends('layouts.users.app')

@section('title')
Into
@endsection

@section('content')
<article class="content responsive-tables-page">
    <div class="courses">
        <div class="title-block">
            <h1 class="title">Điểm danh khóa học {{ $id_course }} buổi {{ $number }} </h1>
        </div>
        <section class="section">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-block">
                            <div class="card-title-block">
                            </div>
                            <section class="example">
                            @if(count($check) == 0)  
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>ID_course</th>
                                                <th>Tên học viên</th>
                                                <th>Có</th>
                                                <th>Muộn</th>
                                                <th>Vắng</th>
                                            </tr>
                                        </thead>
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
                                </div>
                                <button class="btn btn-warning" name='but'>Lưu điểm danh</button>
                            @endif

                            @if (count($check) > 0)
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>
                                                    Lớp đã điểm danh
                                                    
                                                </th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                                <a href="{{ url("/attendance") }}" class="btn btn-primary">Quay lại</a>
                            @endif
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</article>

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
@endsection


