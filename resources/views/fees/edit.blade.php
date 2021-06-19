@extends('layouts.users.app')

@section('title')
Into
@endsection

@section('content')
<article class="content responsive-tables-page">
    <div class="student">
        <div class="card">
            <h1 class="text-IBM"> Học phí lớp : {{ $students[0]->name }}  </h1>
        </div>
        <section class="section">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-block">
                            <section class="example">
                                <div class="table-responsive">
                                    <form method="POST" action="{{url("/fees/{$students[0]->id_course}")}}">
                                        @csrf
                                        @method('PUT')
                                        <table class="table table-bordered table-hover">
                                            <thead>
                                                <tr class="table-primary">
                                                    <th class="w5">ID</th>
                                                    <th class="w30">Tên Học Sinh</th>
                                                    <th class="w15">Ngày Sinh</th>
                                                    <th class="w20">Học Phí</th>
                                                    <th class="w15">Chưa Nộp</th>
                                                    <th class="w15">Đã Nộp</th>
                                                </tr>
                                            </thead>
                                            @foreach($students as $student)
                                            <tr>
                                                <td class="w5">{{ $student->id_student }}</td>
                                                <td class="w30">{{ $student->first_name." ".$student->last_name }}</td>
                                                <td class="w15">{{ $student->dob }}</td>
                                                <td class="w20">{{  number_format($student->fee, 0, ' ', ' ') }}</td>
                                                <td class="w15">
                                                    <input type="radio" id="{{$student->id_student}}_0" name="{{$student->id_student}}" value="0" <?php echo ($student->status_fee == 0) ? 'checked' : 'disabled' ?>>
                                                    <label for="{{$student->id_student}}_0"></label>
                                                </td>
                                                <td class="w15">
                                                    <input type="radio" id="{{$student->id_student}}_1" name="{{$student->id_student}}" value="1" <?php echo ($student->status_fee == 1) ? 'checked' : '' ?>>
                                                    <label for="{{$student->id_student}}_1"></label>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </table>
                                        <div class="right">
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







