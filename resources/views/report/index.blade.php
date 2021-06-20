@extends('layouts.users.app')

@section('title')
Into
@endsection

@section('content')
<article class="content responsive-tables-page">
    <div class="courses">
        <div class="card">
            <h1 class="text-IBM"> Báo cáo </h1>
        </div>
        <section class="section">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-block">
                            <section class="example">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h5 class="d-left">Báo cáo năm 2020</h5>
                                        <a class="d-right ml-4" href="{{ url("/report/2020") }}">
                                            <i class="fa fa-eye icon-view"></i>
                                        </a>
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <h5 class="d-left">Báo cáo năm 2021</h5>
                                        <a class="d-right ml-4" href="{{ url("/report/2021") }}">
                                            <i class="fa fa-eye icon-view"></i>
                                        </a>
                                    </div>
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