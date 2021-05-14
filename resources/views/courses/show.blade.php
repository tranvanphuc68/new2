@extends('layouts.users.app')

@section('title')
Into
@endsection

@section('content')
<article class="content">
    <div class="title-block">
        <h3 class="title"> THÔNG TIN CHI TIẾT KHÓA HỌC</h3>
    </div>
    <div class="card card-block sameheight-item">
        <table>
            <tr>
                <th>Id khóa học</th>
                <th>Buổi</th>
                <th>Nội dung</th>
                <th>Ngày sinh</th>
                <th>Ngày học</th>
            </tr>   
            @foreach($detail as $detail)
            <tr>
                <td>{{ $detail->id_course }}</td>
                <td>{{ $detail->number }}</td>
                <td>{{ $detail->content }}</td>
                <td>{{ $detail->date }}</td>
                <td>
                    <a href='{{ url("/detail_course/{$detail->id_course}-{$detail->number}/edit") }}' class="btn btn-primary">Sửa</a>
                    <a href="javascript:void(0)" onclick="document.getElementById('detailCourse-delete-{{ $detail->number }}').submit()" class="btn btn-primary">Xóa</a>
                    <form action='{{ url("/detail_course/{$detail->id_course}-{$detail->number}") }}' method="POST" id="detailCourse-delete-{{ $detail->number }}">
                        @method('DELETE')
                        @csrf
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</article>

@endsection

