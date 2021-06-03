@extends('layouts.forum.app')

@section('title')
    Create new post
@endsection

@section('content')
@if(Auth::check())
<form method="POST" action="{{ url("/posts") }}">
@csrf

<main id="tt-pageContent">
    <div class="container">
                <div class="sidebar-overlay" id="sidebar-overlay"></div>
                <div class="sidebar-mobile-menu-handle" id="sidebar-mobile-menu-handle"></div>
                <div class="mobile-menu-handle"></div>
                <article class="content item-editor-page">
                    <div class="title-block">
                        <h3 class="title"> Create New Post <span class="sparkline bar" data-type="bar"></span>
                        </h3>
                    </div>
                    <form name="item">
                        <div class="card card-block">

                            <!-- Title -->
                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Title: </label>
                                <div class="col-sm-10">
                                    <input type="text" name="title" class="form-control boxed" placeholder="Describe your post well, while keeping the subject as short as possible" value="{{ old('title') }}">
                                    @error('title')
                                        <div>{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <!-- Type -->
                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right">Type:</label>
                                <div class="col-sm-10">
                                    <div class="tt-js-active-btn tt-wrapper-btnicon">
                                        <div class="row tt-w410-col-02">
                                            <div class="col-4 col-lg-3 col-xl-2">
                                                <a href="#" class="tt-button-icon">
                                                    <span class="tt-icon">
                                                        <svg>
                                                            <use xlink:href="#icon-discussion"></use>
                                                        </svg>
                                                    </span>
                                                    <span class="tt-text">Discussion</span>
                                                </a>
                                            </div>
                                            <div class="col-4 col-lg-3 col-xl-2">
                                                <a href="#" class="tt-button-icon">
                                                    <span class="tt-icon">
                                                        <svg>
                                                            <use xlink:href="#Question"></use>
                                                        </svg>
                                                    </span>
                                                    <span class="tt-text">Question</span>
                                                </a>
                                            </div>
                                            <div class="col-4 col-lg-3 col-xl-2">
                                                <a href="#" class="tt-button-icon">
                                                    <span class="tt-icon">
                                                        <svg>
                                                            <use xlink:href="#Poll"></use>
                                                        </svg>
                                                    </span>
                                                    <span class="tt-text">Poll</span>
                                                </a>
                                            </div>
                                            <div class="col-4 col-lg-3 col-xl-2">
                                                <a href="#" class="tt-button-icon">
                                                    <span class="tt-icon">
                                                        <svg>
                                                            <use xlink:href="#icon-gallery"></use>
                                                        </svg>
                                                    </span>
                                                    <span class="tt-text">Gallery</span>
                                                </a>
                                            </div>
                                            <div class="col-4 col-lg-3 col-xl-2">
                                                <a href="#" class="tt-button-icon">
                                                    <span class="tt-icon">
                                                        <svg>
                                                            <use xlink:href="#Video"></use>
                                                        </svg>
                                                    </span>
                                                    <span class="tt-text">Video</span>
                                                </a>
                                            </div>
                                            <div class="col-4 col-lg-3 col-xl-2">
                                                <a href="#" class="tt-button-icon">
                                                    <span class="tt-icon">
                                                        <svg>
                                                            <use xlink:href="#Others"></use>
                                                        </svg>
                                                    </span>
                                                    <span class="tt-text">Other</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Content: </label>
                                <div class="col-sm-10">
                                    <div class="wyswyg" name="content" value="{{ old('content') }}">
                                        <div class="toolbar">
                                            <select class="ql-size">
                                                <option value="small"></option>
                                                <option selected></option>
                                                <option value="large"></option>
                                                <option value="huge"></option>
                                            </select>
                                            <button class="ql-bold"></button>
                                            <button class="ql-italic"></button>
                                            <button class="ql-underline"></button>
                                            <button class="ql-strike"></button>
                                            <select title="Text Color" class="ql-color">
                                                <option value="rgb(0, 0, 0)" label="rgb(0, 0, 0)" selected></option>
                                                <option value="rgb(230, 0, 0)" label="rgb(230, 0, 0)"></option>
                                                <option value="rgb(255, 153, 0)" label="rgb(255, 153, 0)"></option>
                                                <option value="rgb(255, 255, 0)" label="rgb(255, 255, 0)"></option>
                                                <option value="rgb(0, 138, 0)" label="rgb(0, 138, 0)"></option>
                                                <option value="rgb(0, 102, 204)" label="rgb(0, 102, 204)"></option>
                                                <option value="rgb(153, 51, 255)" label="rgb(153, 51, 255)"></option>
                                                <option value="rgb(255, 255, 255)" label="rgb(255, 255, 255)"></option>
                                                <option value="rgb(250, 204, 204)" label="rgb(250, 204, 204)"></option>
                                                <option value="rgb(255, 235, 204)" label="rgb(255, 235, 204)"></option>
                                                <option value="rgb(255, 255, 204)" label="rgb(255, 255, 204)"></option>
                                                <option value="rgb(204, 232, 204)" label="rgb(204, 232, 204)"></option>
                                                <option value="rgb(204, 224, 245)" label="rgb(204, 224, 245)"></option>
                                                <option value="rgb(235, 214, 255)" label="rgb(235, 214, 255)"></option>
                                                <option value="rgb(187, 187, 187)" label="rgb(187, 187, 187)"></option>
                                                <option value="rgb(240, 102, 102)" label="rgb(240, 102, 102)"></option>
                                                <option value="rgb(255, 194, 102)" label="rgb(255, 194, 102)"></option>
                                                <option value="rgb(255, 255, 102)" label="rgb(255, 255, 102)"></option>
                                                <option value="rgb(102, 185, 102)" label="rgb(102, 185, 102)"></option>
                                                <option value="rgb(102, 163, 224)" label="rgb(102, 163, 224)"></option>
                                                <option value="rgb(194, 133, 255)" label="rgb(194, 133, 255)"></option>
                                                <option value="rgb(136, 136, 136)" label="rgb(136, 136, 136)"></option>
                                                <option value="rgb(161, 0, 0)" label="rgb(161, 0, 0)"></option>
                                                <option value="rgb(178, 107, 0)" label="rgb(178, 107, 0)"></option>
                                                <option value="rgb(178, 178, 0)" label="rgb(178, 178, 0)"></option>
                                                <option value="rgb(0, 97, 0)" label="rgb(0, 97, 0)"></option>
                                                <option value="rgb(0, 71, 178)" label="rgb(0, 71, 178)"></option>
                                                <option value="rgb(107, 36, 178)" label="rgb(107, 36, 178)"></option>
                                                <option value="rgb(68, 68, 68)" label="rgb(68, 68, 68)"></option>
                                                <option value="rgb(92, 0, 0)" label="rgb(92, 0, 0)"></option>
                                                <option value="rgb(102, 61, 0)" label="rgb(102, 61, 0)"></option>
                                                <option value="rgb(102, 102, 0)" label="rgb(102, 102, 0)"></option>
                                                <option value="rgb(0, 55, 0)" label="rgb(0, 55, 0)"></option>
                                                <option value="rgb(0, 41, 102)" label="rgb(0, 41, 102)"></option>
                                                <option value="rgb(61, 20, 102)" label="rgb(61, 20, 102)"></option>
                                            </select>
                                            <select title="Background Color" class="ql-background">
                                                <option value="rgb(0, 0, 0)" label="rgb(0, 0, 0)"></option>
                                                <option value="rgb(230, 0, 0)" label="rgb(230, 0, 0)"></option>
                                                <option value="rgb(255, 153, 0)" label="rgb(255, 153, 0)"></option>
                                                <option value="rgb(255, 255, 0)" label="rgb(255, 255, 0)"></option>
                                                <option value="rgb(0, 138, 0)" label="rgb(0, 138, 0)"></option>
                                                <option value="rgb(0, 102, 204)" label="rgb(0, 102, 204)"></option>
                                                <option value="rgb(153, 51, 255)" label="rgb(153, 51, 255)"></option>
                                                <option value="rgb(255, 255, 255)" label="rgb(255, 255, 255)" selected></option>
                                                <option value="rgb(250, 204, 204)" label="rgb(250, 204, 204)"></option>
                                                <option value="rgb(255, 235, 204)" label="rgb(255, 235, 204)"></option>
                                                <option value="rgb(255, 255, 204)" label="rgb(255, 255, 204)"></option>
                                                <option value="rgb(204, 232, 204)" label="rgb(204, 232, 204)"></option>
                                                <option value="rgb(204, 224, 245)" label="rgb(204, 224, 245)"></option>
                                                <option value="rgb(235, 214, 255)" label="rgb(235, 214, 255)"></option>
                                                <option value="rgb(187, 187, 187)" label="rgb(187, 187, 187)"></option>
                                                <option value="rgb(240, 102, 102)" label="rgb(240, 102, 102)"></option>
                                                <option value="rgb(255, 194, 102)" label="rgb(255, 194, 102)"></option>
                                                <option value="rgb(255, 255, 102)" label="rgb(255, 255, 102)"></option>
                                                <option value="rgb(102, 185, 102)" label="rgb(102, 185, 102)"></option>
                                                <option value="rgb(102, 163, 224)" label="rgb(102, 163, 224)"></option>
                                                <option value="rgb(194, 133, 255)" label="rgb(194, 133, 255)"></option>
                                                <option value="rgb(136, 136, 136)" label="rgb(136, 136, 136)"></option>
                                                <option value="rgb(161, 0, 0)" label="rgb(161, 0, 0)"></option>
                                                <option value="rgb(178, 107, 0)" label="rgb(178, 107, 0)"></option>
                                                <option value="rgb(178, 178, 0)" label="rgb(178, 178, 0)"></option>
                                                <option value="rgb(0, 97, 0)" label="rgb(0, 97, 0)"></option>
                                                <option value="rgb(0, 71, 178)" label="rgb(0, 71, 178)"></option>
                                                <option value="rgb(107, 36, 178)" label="rgb(107, 36, 178)"></option>
                                                <option value="rgb(68, 68, 68)" label="rgb(68, 68, 68)"></option>
                                                <option value="rgb(92, 0, 0)" label="rgb(92, 0, 0)"></option>
                                                <option value="rgb(102, 61, 0)" label="rgb(102, 61, 0)"></option>
                                                <option value="rgb(102, 102, 0)" label="rgb(102, 102, 0)"></option>
                                                <option value="rgb(0, 55, 0)" label="rgb(0, 55, 0)"></option>
                                                <option value="rgb(0, 41, 102)" label="rgb(0, 41, 102)"></option>
                                                <option value="rgb(61, 20, 102)" label="rgb(61, 20, 102)"></option>
                                            </select>
                                            <button class="ql-list" value="ordered"></button>
                                            <button class="ql-list" value="bullet"></button>
                                            <select title="Text Alignment" class="ql-align">
                                                <option selected></option>
                                                <option value="center" label="Center"></option>
                                                <option value="right" label="Right"></option>
                                                <option value="justify" label="Justify"></option>
                                            </select>
                                            <button class="ql-link"></button>
                                            <button style="width: auto;" type="button" title="Image" class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#modal-media">
                                                <i class="fa fa-image"></i> Media 
                                            </button>
                                        </div>
                                        <div class="editor">
                                        </div>
                                    </div>
                                    {{-- <textarea name="content" class="form-control" value="{{ old('content') }}"></textarea> --}}
                                    @error('content')
                                        <div>{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <script>
                                //Hàm đọc giá trị và hiện thị thông tin
                                function textthaydoi() {
                                    var value = $( this ).val();
                                    $( "[content]" ).text( value );
                                }

                                //Bắt sự kiện keyup của textbox
                                $( ".editor" ).keyup(textthaydoi);

                                //Cho #inputext phát sinh một sự kiện keyup ban đầu
                                $( ".editor" ).keyup();

                            </script>

                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Images: </label>
                                <div class="col-sm-10">
                                    <div class="images-container">
                                        <div class="image-container">
                                            <div class="controls">
                                                <a href="" class="control-btn move">
                                                    <i class="fa fa-arrows"></i>
                                                </a>
                                                <!-- -->
                                                <a href="" class="control-btn star">
                                                    <i class="fa"></i>
                                                </a>
                                                <!-- -->
								                <a href="#" class="control-btn remove" data-toggle="modal" data-target="#confirm-modal">
                                                    <i class="fa fa-trash-o"></i>
                                                </a>
                                            </div>
                                            <div class="image" style="background-image:url('https://s3.amazonaws.com/uifaces/faces/twitter/brad_frost/128.jpg')"></div>
                                        </div>
                                        <div class="image-container">
                                            <div class="controls">
                                                <a href="" class="control-btn move">
                                                    <i class="fa fa-arrows"></i>
                                                </a>
                                                <!-- -->
								                <a href="" class="control-btn star">
                                                    <i class="fa"></i>
                                                </a>
                                                <!-- -->
								                <a href="#" class="control-btn remove" data-toggle="modal" data-target="#confirm-modal">
                                                    <i class="fa fa-trash-o"></i>
                                                </a>
                                            </div>
                                            <div class="image" style="background-image:url('https://s3.amazonaws.com/uifaces/faces/twitter/_everaldo/128.jpg')"></div>
                                        </div>
                                        <div class="image-container">
                                            <div class="controls">
                                                <a href="" class="control-btn move">
                                                    <i class="fa fa-arrows"></i>
                                                </a>
                                                <!-- -->
								                <a href="" class="control-btn star">
                                                    <i class="fa"></i>
                                                </a>
                                                <!-- -->
								                <a href="#" class="control-btn remove" data-toggle="modal" data-target="#confirm-modal">
                                                    <i class="fa fa-trash-o"></i>
                                                </a>
                                            </div>
                                            <div class="image" style="background-image:url('https://s3.amazonaws.com/uifaces/faces/twitter/eduardo_olv/128.jpg')"></div>
                                        </div>
                                        <a href="#" class="add-image" data-toggle="modal" data-target="#modal-media">
                                            <div class="image-container new">
                                                <div class="image">
                                                    <i class="fa fa-plus"></i>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-auto ml-md-auto">
                                    <button class="btn btn-primary btn-sm" type="submit">Create Post</button>
                                    <button class="btn btn-danger btn-sm ml-2" type="reset">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </article>
    </div>
</main>
</form>
@endif
@endsection