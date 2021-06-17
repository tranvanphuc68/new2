@extends('layouts.forum.app')

@section('title')
    Create new report post
@endsection

@section('content')
@if(Auth::check())
    <!-- Create new report post -->
    <form method="POST" action="{{ url("/report_posts/{$post}") }}">
        @csrf
        <main id="tt-pageContent">
            <!-- Modal report-->
            <div tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                            <h5 class="center mt_50px">Report post</h5>
                            <p class="center mt_10px">Help us understand what is wrong with this post.</p>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="content" id="reportPost1" value="Nội dung xúc phạm">
                                <label class="form-check-label" for="reportPost1">
                                    Nội dung xúc phạm
                                </label>
                                <hr>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="content" id="reportPost2" value="Phương tiện công kích">
                                <label class="form-check-label" for="reportPost2">
                                    Phương tiện công kích
                                </label>
                                <hr>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="content" id="reportPost3" value="Spam">
                                <label class="form-check-label" for="reportPost3">
                                    Spam
                                </label>
                                <hr>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="content" id="reportPost4" value="Thông tin sai sự thật">
                                <label class="form-check-label" for="reportPost4">
                                    Thông tin sai sự thật
                                </label>
                                <hr>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="content" id="reportPost5" value="Ngôn từ gây thù ghét">
                                <label class="form-check-label" for="reportPost5">
                                    Ngôn từ gây thù ghét
                                </label>
                                <hr>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="content" id="reportPost6" value="Đăng nội dung không phù hợp">
                                <label class="form-check-label" for="reportPost6">
                                    Đăng nội dung không phù hợp
                                </label>
                                <hr>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="content" id="reportPost7" value="Vấn đề khác">
                                <label class="form-check-label" for="reportPost7">
                                    Vấn đề khác
                                </label>
                            </div>
                                
                            @error('content')
                                <div class="form-text text-danger mt-4">{{ $message }}</div>
                            @enderror

                            <div class="row justify-content-center mt-5">
                                <a href="{{ url("posts/$post") }}" class="btn btn-secondary mr-3">Cancel</a>
                                <button type="submit" class="btn btn-primary">Report</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </form>
@endif
@endsection