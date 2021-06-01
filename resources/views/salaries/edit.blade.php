
@extends('layouts.users.app')

@section('title')
Into
@endsection

@section('content')
<article class="content responsive-tables-page">
    <div class="salary">
        <div class="card">
            <h1 class="text-IBM"> Lương của giảng viên {{ $teachers[0]->first_name." ".$teachers[0]->last_name }}</h1>
        </div>
        <section class="section">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-block">
                            <section class="example">
                                <div class="table-responsive">
                                    <form method="POST" action="{{ url("/salaries/{$teachers[0]->id_teacher}") }}">
                                        @csrf
                                        @method('PUT')
                                        <table class="table table-bordered table-hover">
                                            <thead>
                                                <tr class="table-primary">
                                                    <th class="w10">ID</th>
                                                    <th class="w30">Tên Khóa Học</th>
                                                    <th class="w20">Lương</th>
                                                    <th class="w20">Chưa Nhận</th>
                                                    <th class="w20">Đã Nhận</th>
                                                </tr>
                                            </thead>
                                            @foreach($teachers as $teacher)
                                                <tr>
                                                    <td class="w10">{{ $teacher->id }}</td>
                                                    <td class="w30">{{ $teacher->name }}</td>
                                                    <td class="w20">{{ $teacher->salary }}</td>
                                                    <td class="w20">
                                                        <input type="radio" id="{{$teacher->id_teacher}}_0" name ="{{$teacher->id}}" value="0" <?php echo ($teacher->status_salary == 0) ? 'checked' : 'disabled'?>>
                                                        <label for="{{$teacher->id_teacher}}_0"></label>
                                                    </td>
                                                    <td class="w20">
                                                        <input type="radio" id="{{$teacher->id_teacher}}_1" name ="{{$teacher->id}}" value="1" <?php echo ($teacher->status_salary == 1) ? 'checked' : ''?>>
                                                        <label for="{{$teacher->id_teacher}}_1"></label>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </table>
                                        <div style="text-align: right;">
                                            <button class="btn btn-primary" type="submit"> Cập Nhật Lương</button>
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