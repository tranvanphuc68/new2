
@extends('layouts.users.app')

@section('title')
Into
@endsection

@section('content')
<article class="content responsive-tables-page">
    <div class="mark">
        <div class="card">
            <h1 class="text-IBM"> Cập nhật điểm khóa học {{ $students[0]->name}} </h1>
        </div>
        <section class="section">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-block">
                            <section class="example">
                                <div class="table-responsive">
                                    <form method="POST" action="{{ url("/marks/{$students[0]->id_course}") }}" >
                                        @csrf
                                        @method('PUT')
                                        <table class="table table-bordered table-hover">
                                            <thead>
                                                <tr class="table-primary">
                                                    <th class="w15">ID Học Viên</th>
                                                    <th class="">Tên Học Viên</th>
                                                    <th class="w25">Ngày Sinh</th>
                                                    <th class="w25">Điểm</th>
                                                </tr>
                                            </thead>
                                            @foreach($students as $student)
                                                <tr>
                                                    <td class="w15">{{ $student->id_student }}</td>
                                                    <td class="">{{ $student->first_name." ".$student->last_name }}</td>
                                                    <td class="w25">{{ $student->dob }}</td>
                                                    <td class="w25"><input type="text" name ="{{ $student->id_student }}" id="{{ $student->id_student }}" value="{{ number_format(("$student->mark"),1,'.','') }}" pattern="0.0|0.5|1.0|1.5|2.0|2.5|3.0|3.5|4.0|4.5|5.0|5.5|6.0|6.5|7.0|7.5|8.0|8.5|9.0"
                                                        oninvalid="InvalidMsg(this);" oninput="InvalidMsg(this);" >
                                                        <script>
                                                            function InvalidMsg(textbox) {
                                                                if(textbox.validity.patternMismatch){
                                                                    textbox.setCustomValidity('Điểm không hợp lệ');
                                                                }    
                                                                else {
                                                                    textbox.setCustomValidity('');
                                                                }
                                                                return true;
                                                                }
                                                        </script>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </table>
                                        <div style="text-align: right">
                                            <button class="btn btn-primary" type="submit"> Cập Nhật</button>
                                        </div>
                                    </form>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</article>

@endsection