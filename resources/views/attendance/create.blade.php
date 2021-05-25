
@extends('layouts.users.app')

@section('title')
Into
@endsection

@section('content')
<article class="content responsive-tables-page">
    <div class="courses">
        <div class="card col-md-12" style="padding: 0px;">
            <h1 class="text-IBM">Điểm danh khóa học {{ $data[0]->name }} buổi học thứ {{ $number }} </h1>
        </div>
        <section class="section">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-block">
                            <section class="example">
                            @if(count($check) == 0)  
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover">
                                        <thead>
                                            <tr class="table-primary" >
                                                <th>Tên Học Viên</th>
                                                <th class="w20">Ngày Sinh</th>
                                                <th class="w15">Có</th>
                                                <th class="w15">Muộn</th>
                                                <th class="w15">Vắng</th>
                                            </tr>
                                        </thead>
                                        @foreach($data as $data)
                                            <tr>
                                                <td>{{ $data->fullname }}</td>
                                                <td class="w20">{{ $data->dob }}</td>
                                                <td class="w15"><input type="radio" name="{{ $data->id_student }}" value="0" checked></td>
                                                <td class="w15"><input type="radio" name="{{ $data->id_student }}" value="1"></td>
                                                <td class="w15"><input type="radio" name="{{ $data->id_student }}" value="2"></td>
                                            </tr>
                                        @endforeach
                                    </table>
                                </div>
                                <div style="text-align: right;">
                                    <button class="btn btn-warning" name='but'>Lưu điểm danh</button>
                                </div>
                            @endif

                            @if (count($check) > 0)
                                <div class="card-title-block">
                                    <h3 style="float:left">Lớp đã điểm danh </h3>
                                    <a style="float:right" href="{{ url("/attendance") }}" class="btn btn-primary">Quay lại</a>
                                </div>
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


