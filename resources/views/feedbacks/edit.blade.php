
@extends('layouts.users.app')

@section('title')
Into
@endsection

@section('content')
<article class="content responsive-tables-page">
    <div class="student">
        <div class="title-block">
            <h1 class="title"> CẬP NHẬT FEEDBACKS KHÓA HỌC {{$students[0]->name}} </h1>
        </div>
        <section class="section">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-block">
                            <section class="example">
                                <div class="table-responsive">
                                    <form method="POST" action="{{ url("/feedbacks/{$feedback->id_course}") }}">
                                        @csrf
                                        @method('PUT')
                                            <textarea class="form-control" rows="5" name="feedback">{{ $feedback->feedback }}</textarea>
                                            <div class="mt-3" style="text-align: right;">
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