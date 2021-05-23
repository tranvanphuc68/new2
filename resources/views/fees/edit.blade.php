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
                            <div class="card-title-block">
                                <form role="search" style="text-align: right">
                                    <div class="input-container">
                                        <i class="fa fa-search"></i>
                                        <input type="search" placeholder="Search">
                                        <div class="underline"></div>
                                    </div>
                                </form>
                            </div>
                            <section class="example">
                                <div class="table-responsive">
                                    <form method="POST" action="{{url("/fees/{$students[0]->id_course}")}}">
                                        @csrf
                                        @method('PUT')
                                        <table class="table table-bordered table-hover">
                                            <thead>
                                                <tr class="table-primary">
                                                    <th>ID</th>
                                                    <th>Tên Học Sinh</th>
                                                    <th>Học Phí</th>
                                                    <th>Chưa Nộp</th>
                                                    <th>Đã Nộp</th>
                                                </tr>
                                            </thead>
                                            @foreach($students as $student)
                                            <tr>
                                                <td>{{ $student->id_student }}</td>
                                                <td>{{ $student->fullname }}</td>
                                                <td>{{ $student->fee }}</td>
                                                <td>
                                                    <input type="radio" id="{{$student->id_student}}_0" name="{{$student->id_student}}" value="0" <?php echo ($student->status_fee == 0) ? 'checked' : '' ?>>
                                                    <label for="{{$student->id_student}}_0"></label>
                                                </td>
                                                <td>
                                                    <input type="radio" id="{{$student->id_student}}_1" name="{{$student->id_student}}" value="1" <?php echo ($student->status_fee == 1) ? 'checked' : '' ?>>
                                                    <label for="{{$student->id_student}}_1"></label>
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







