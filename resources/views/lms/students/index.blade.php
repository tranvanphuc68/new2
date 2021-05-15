@extends('layouts.users.app')

@section('title')
Into
@endsection

@section('content')
<article class="content">
    <div class="courses">
        <form role="search" style="text-align: left">
            <div class="input-container">
                <i class="fa fa-search"></i>
                <input type="search" placeholder="Tìm khóa học">
                <div class="underline"></div>
            </div>
        </form>
        <div class="mt-3">
            <div class="row">
            @foreach ($teachers as $key=>$teacher)
                <div class="col-md-4">
                    <div class="card m-2">
                        <img class="card-img-top" src="https://www.gettyimages.in/gi-resources/images/Homepage/Hero/UK/CMS_Creative_164657191_Kingfisher.jpg" alt="">
                        <div class="card-body">
                            <h5 class="card-title">Tên lớp </h5>
                            <h6 class="card-subtitle mb-1 text-muted">Giáo viên : <?php echo $teacher->fullname?></h6>
                            <a href="#" class="btn btn-primary">Vào lớp</a>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
        </div>
    </div>

</article>
@endsection