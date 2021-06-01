@extends('layouts.forum.app')

@section('title')
    Create new post
@endsection

@section('content')
@if(Auth::check())
<div class="container content">
<form method="POST" action="{{ url("/posts") }}">
@csrf

{{-- <div class="container mt-5">
    <div class="d-flex justify-content-center row">
        <div class="col-md-10">
            <div class="d-flex flex-column comment-section">
                <div class="bg-light p-2"  style="border-radius: 10px;">
                    <div class="d-flex flex-row align-items-start">
                        <img class="rounded-circle img" width="40" src="{{ asset("/uploads/avatars/".Auth::user()->avatar) }}">
                        <div class="d-flex flex-column justify-content-start ml-2">
                            <span class="d-block font-weight-bold name">{{ Auth::user()->first_name." ".Auth::user()->last_name }}</span>
                        </div>
                    </div>
                    <div class="mt-3 mb-2">
                        <input type="textarea" class="form-control ml-1 shadow-none textarea" name="title" value="{{ old('title') }}" placeholder="Post title">
                        @error('title')
                            <div>{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="d-flex flex-row align-items-start">
                        <textarea class="form-control ml-1 shadow-none textarea" name="content" value="{{ old('content') }}" placeholder="Post content"></textarea>
                    @error('content')
                        <div>{{ $message }}</div>
                    @enderror
                    </div>
                    <div class="mt-2 text-right">
                        <button class="btn btn-primary btn-sm shadow-none" type="submit">Post</button>
                        <button class="btn btn-outline-primary btn-sm ml-1 shadow-none" type="reset">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}

<main id="tt-pageContent">
    <div class="container">
        <div class="tt-wrapper-inner">
            <h1 class="tt-title-border">
                Create New Topic
            </h1>
            <form class="form-default form-create-topic">
                <div class="form-group">
                    <label for="inputTopicTitle">Topic Title</label>
                    <div class="tt-value-wrapper">
                        <input type="text" name="name" class="form-control" id="inputTopicTitle" placeholder="Subject of your topic">
                        <span class="tt-value-input">99</span>
                    </div>
                    <div class="tt-note">Describe your topic well, while keeping the subject as short as possible.</div>
                </div>
                <div class="form-group">
                    <label>Topic Type</label>
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
                <div class="pt-editor">
                    <h6 class="pt-title">Topic Body</h6>
                    <div class="pt-row">
                        <div class="col-left">
                            <ul class="pt-edit-btn">
                                <li><button type="button" class="btn-icon">
                                    <svg class="tt-icon">
                                      <use xlink:href="#icon-quote"></use>
                                    </svg>
                                </button></li>
                                <li><button type="button" class="btn-icon">
                                    <svg class="tt-icon">
                                      <use xlink:href="#icon-bold"></use>
                                    </svg>
                                </button></li>
                                <li><button type="button" class="btn-icon">
                                    <svg class="tt-icon">
                                      <use xlink:href="#icon-italic"></use>
                                    </svg>
                                </button></li>
                                <li><button type="button" class="btn-icon">
                                    <svg class="tt-icon">
                                      <use xlink:href="#icon-share_topic"></use>
                                    </svg>
                                </button></li>
                                <li><button type="button" class="btn-icon">
                                    <svg class="tt-icon">
                                      <use xlink:href="#icon-blockquote"></use>
                                    </svg>
                                </button></li>
                                <li><button type="button" class="btn-icon">
                                    <svg class="tt-icon">
                                      <use xlink:href="#icon-performatted"></use>
                                    </svg>
                                </button></li>
                                <li class="hr"></li>
                                <li><button type="button" class="btn-icon">
                                    <svg class="tt-icon">
                                      <use xlink:href="#icon-upload_files"></use>
                                    </svg>
                                </button></li>
                                <li><button type="button" class="btn-icon">
                                    <svg class="tt-icon">
                                      <use xlink:href="#icon-bullet_list"></use>
                                    </svg>
                                </button></li>
                                <li><button type="button" class="btn-icon">
                                    <svg class="tt-icon">
                                      <use xlink:href="#icon-heading"></use>
                                    </svg>
                                </button></li>
                                <li><button type="button" class="btn-icon">
                                    <svg class="tt-icon">
                                      <use xlink:href="#icon-horizontal_line"></use>
                                    </svg>
                                </button></li>
                                <li><button type="button" class="btn-icon">
                                    <svg class="tt-icon">
                                      <use xlink:href="#icon-emoticon"></use>
                                    </svg>
                                </button></li>
                                <li><button type="button" class="btn-icon">
                                    <svg class="tt-icon">
                                      <use xlink:href="#icon-settings"></use>
                                    </svg>
                                </button></li>
                                <li><button type="button" class="btn-icon">
                                    <svg class="tt-icon">
                                      <use xlink:href="#icon-color_picker"></use>
                                    </svg>
                                </button></li>
                            </ul>
                        </div>
                    </div>
                    <div class="form-group">
                        <textarea name="message" class="form-control" rows="5" placeholder="Lets get started"></textarea>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="inputTopicTitle">Category</label>
                                <select class="form-control">
                                    <option value="Select">Select</option>
                                    <option value="Value 01">Value 01</option>
                                    <option value="Value 02">Value 02</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="inputTopicTags">Tags</label>
                                <input type="text" name="name" class="form-control" id="inputTopicTags" placeholder="Use comma to separate tags">
                            </div>
                        </div>
                    </div>
                     <div class="row">
                        <div class="col-auto ml-md-auto">
                            <a href="#" class="btn btn-secondary btn-width-lg">Create Post</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="tt-topic-list tt-offset-top-30">
            <div class="tt-list-search">
                <div class="tt-title">Suggested Topics</div>
                <!-- tt-search -->
                <div class="tt-search">
                    <form class="search-wrapper">
                        <div class="search-form">
                            <input type="text" class="tt-search__input" placeholder="Search for topics">
                            <button class="tt-search__btn" type="submit">
                               <svg class="tt-icon">
                                  <use xlink:href="#icon-search"></use>
                                </svg>
                            </button>
                             <button class="tt-search__close">
                               <svg class="tt-icon">
                                  <use xlink:href="#icon-cancel"></use>
                                </svg>
                            </button>
                        </div>
                    </form>
                </div>
                <!-- /tt-search -->
            </div>
            <div class="tt-list-header tt-border-bottom">
                <div class="tt-col-topic">Topic</div>
                <div class="tt-col-category">Category</div>
                <div class="tt-col-value hide-mobile">Likes</div>
                <div class="tt-col-value hide-mobile">Replies</div>
                <div class="tt-col-value hide-mobile">Views</div>
                <div class="tt-col-value">Activity</div>
            </div>
            <div class="tt-item">
                <div class="tt-col-avatar">
                    <svg class="tt-icon">
                      <use xlink:href="#icon-ava-n"></use>
                    </svg>
                </div>
                <div class="tt-col-description">
                    <h6 class="tt-title"><a href="#">
                        Does Envato act against the authors of Envato markets?
                    </a></h6>
                    <div class="row align-items-center no-gutters hide-desktope">
                        <div class="col-auto">
                            <ul class="tt-list-badge">
                                <li class="show-mobile"><a href="#"><span class="tt-color05 tt-badge">music</span></a></li>
                            </ul>
                        </div>
                        <div class="col-auto ml-auto show-mobile">
                           <div class="tt-value">1d</div>
                        </div>
                    </div>
                </div>
                <div class="tt-col-category"><span class="tt-color05 tt-badge">music</span></div>
                <div class="tt-col-value hide-mobile">358</div>
                <div class="tt-col-value tt-color-select hide-mobile">68</div>
                <div class="tt-col-value hide-mobile">8.3k</div>
                <div class="tt-col-value hide-mobile">1d</div>
            </div>
            <div class="tt-item">
                <div class="tt-col-avatar">
                   <svg class="tt-icon">
                      <use xlink:href="#icon-ava-h"></use>
                    </svg>
                </div>
                <div class="tt-col-description">
                    <h6 class="tt-title"><a href="#">
                        <svg class="tt-icon">
                          <use xlink:href="#icon-locked"></use>
                        </svg>
                        We Want to Hear From You! What Would You Like?
                    </a></h6>
                    <div class="row align-items-center no-gutters hide-desktope">
                        <div class="col-auto">
                            <ul class="tt-list-badge">
                                <li class="show-mobile"><a href="#"><span class="tt-color06 tt-badge">movies</span></a></li>
                            </ul>
                        </div>
                        <div class="col-auto ml-auto show-mobile">
                           <div class="tt-value">2d</div>
                        </div>
                    </div>
                </div>
                <div class="tt-col-category"><span class="tt-color06 tt-badge">movies</span></div>
                <div class="tt-col-value hide-mobile">674</div>
                <div class="tt-col-value tt-color-select  hide-mobile">29</div>
                <div class="tt-col-value hide-mobile">1.3k</div>
                <div class="tt-col-value hide-mobile">2d</div>
            </div>
            <div class="tt-item">
                <div class="tt-col-avatar">
                   <svg class="tt-icon">
                      <use xlink:href="#icon-ava-j"></use>
                    </svg>
                </div>
                <div class="tt-col-description">
                    <h6 class="tt-title"><a href="#">
                       Seeking partner backend developer
                    </a></h6>
                    <div class="row align-items-center no-gutters">
                        <div class="col-auto">
                            <ul class="tt-list-badge">
                                <li class="show-mobile"><a href="#"><span class="tt-color03 tt-badge">exchange</span></a></li>
                                <li><a href="#"><span class="tt-badge">themeforest</span></a></li>
                                <li><a href="#"><span class="tt-badge">elements</span></a></li>
                            </ul>
                        </div>
                        <div class="col-auto ml-auto show-mobile">
                           <div class="tt-value">2d</div>
                        </div>
                    </div>
                </div>
                <div class="tt-col-category"><span class="tt-color13 tt-badge">movies</span></div>
                <div class="tt-col-value hide-mobile">278</div>
                <div class="tt-col-value tt-color-select  hide-mobile">27</div>
                <div class="tt-col-value hide-mobile">1.4k</div>
                <div class="tt-col-value hide-mobile">2d</div>
            </div>
            <div class="tt-item">
                <div class="tt-col-avatar">
                   <svg class="tt-icon">
                      <use xlink:href="#icon-ava-t"></use>
                    </svg>
                </div>
                <div class="tt-col-description">
                    <h6 class="tt-title"><a href="#">
                        Cannot customize my intro
                    </a></h6>
                    <div class="row align-items-center no-gutters">
                        <div class="col-auto">
                             <ul class="tt-list-badge">
                                <li class="show-mobile"><a href="#"><span class="tt-color07 tt-badge">video games</span></a></li>
                                <li><a href="#"><span class="tt-badge">videohive</span></a></li>
                                <li><a href="#"><span class="tt-badge">photodune</span></a></li>
                            </ul>
                        </div>
                        <div class="col-auto ml-auto show-mobile">
                           <div class="tt-value">2d</div>
                        </div>
                    </div>
                </div>
                <div class="tt-col-category"><span class="tt-color07 tt-badge">video games</span></div>
                <div class="tt-col-value hide-mobile">364</div>
                <div class="tt-col-value tt-color-select  hide-mobile">36</div>
                <div class="tt-col-value  hide-mobile">982</div>
                <div class="tt-col-value hide-mobile">2d</div>
            </div>
            <div class="tt-item">
                <div class="tt-col-avatar">
                   <svg class="tt-icon">
                      <use xlink:href="#icon-ava-k"></use>
                    </svg>
                </div>
                <div class="tt-col-description">
                    <h6 class="tt-title"><a href="#">
                        <svg class="tt-icon">
                          <use xlink:href="#icon-verified"></use>
                        </svg>
                        Microsoft Word and Power Point
                    </a></h6>
                    <div class="row align-items-center no-gutters hide-desktope">
                        <div class="col-auto">
                            <ul class="tt-list-badge">
                                <li class="show-mobile"><a href="#"><span class="tt-color08 tt-badge">youtube</span></a></li>
                            </ul>
                        </div>
                        <div class="col-auto ml-auto show-mobile">
                           <div class="tt-value">3d</div>
                        </div>
                    </div>
                </div>
                <div class="tt-col-category"><span class="tt-color08 tt-badge">youtube</span></div>
                <div class="tt-col-value  hide-mobile">698</div>
                <div class="tt-col-value tt-color-select  hide-mobile">78</div>
                <div class="tt-col-value  hide-mobile">2.1k</div>
                <div class="tt-col-value hide-mobile">3d</div>
            </div>
            <div class="tt-row-btn">
                <button type="button" class="btn-icon js-topiclist-showmore">
                    <svg class="tt-icon">
                      <use xlink:href="#icon-load_lore_icon"></use>
                    </svg>
                </button>
            </div>
        </div>
    </div>
</main>
<div id="js-popup-settings" class="tt-popup-settings">
	<div class="tt-btn-col-close">
		<a href="#">
			<span class="tt-icon-title">
				<svg>
					<use xlink:href="#icon-settings_fill"></use>
				</svg>
			</span>
			<span class="tt-icon-text">
				Settings
			</span>
			<span class="tt-icon-close">
				<svg>
					<use xlink:href="#icon-cancel"></use>
				</svg>
			</span>
		</a>
	</div>
	<form class="form-default">
		<div class="tt-form-upload">
			<div class="row no-gutter">
				<div class="col-auto">
					<div class="tt-avatar">
		                <svg>
		                  <use xlink:href="#icon-ava-d"></use>
		                </svg>
		            </div>
				</div>
				<div class="col-auto ml-auto">
					<a href="#" class="btn btn-primary">Upload Picture</a>
				</div>
			</div>
		</div>
		<div class="form-group">
		    <label for="settingsUserName">Username</label>
		   <input type="text" name="name" class="form-control" id="settingsUserName" placeholder="azyrusmax">
		</div>
		<div class="form-group">
		    <label for="settingsUserEmail">Email</label>
		   <input type="text" name="name" class="form-control" id="settingsUserEmail" placeholder="Sample@sample.com">
		</div>
		<div class="form-group">
		    <label for="settingsUserPassword">Password</label>
		   <input type="password" name="name" class="form-control" id="settingsUserPassword" placeholder="************">
		</div>
		<div class="form-group">
		    <label for="settingsUserLocation">Location</label>
		   <input type="text" name="name" class="form-control" id="settingsUserLocation" placeholder="Slovakia">
		</div>
		<div class="form-group">
		    <label for="settingsUserWebsite">Website</label>
		   <input type="text" name="name" class="form-control" id="settingsUserWebsite" placeholder="Sample.com">
		</div>
		<div class="form-group">
		    <label for="settingsUserAbout">About</label>
		    <textarea name="" placeholder="Few words about you" class="form-control" id="settingsUserAbout"></textarea>
		</div>
		<div class="form-group">
			<label for="settingsUserAbout">Notify me via Email</label>
			<div class="checkbox-group">
		        <input type="checkbox" id="settingsCheckBox01" name="checkbox">
		        <label for="settingsCheckBox01">
		            <span class="check"></span>
		            <span class="box"></span>
		            <span class="tt-text">When someone replies to my thread</span>
		        </label>
		    </div>
		    <div class="checkbox-group">
		        <input type="checkbox" id="settingsCheckBox02" name="checkbox">
		        <label for="settingsCheckBox02">
		            <span class="check"></span>
		            <span class="box"></span>
		            <span class="tt-text">When someone likes my thread or reply</span>
		        </label>
		    </div>
		    <div class="checkbox-group">
		        <input type="checkbox" id="settingsCheckBox03" name="checkbox">
		        <label for="settingsCheckBox03">
		            <span class="check"></span>
		            <span class="box"></span>
		            <span class="tt-text">When someone mentions me</span>
		        </label>
		    </div>
		</div>
		<div class="form-group">
			<a href="#" class="btn btn-secondary">Save</a>
		</div>
		</form>
</div>
<a href="page-create-topic.html" class="tt-btn-create-topic">
    <span class="tt-icon">
        <svg>
          <use xlink:href="#icon-create_new"></use>
        </svg>
    </span>
</a>

<div class="modal fade" id="modalAdvancedSearch" tabindex="-1" role="dialog" aria-label="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div class="tt-modal-advancedSearch">
				<div class="tt-modal-title">
					<i class="pt-icon">
						<svg>
							<use xlink:href="#icon-advanced_search"></use>
						</svg>
					</i>
					Advanced Search
					<a class="pt-close-modal" href="#" data-dismiss="modal">
						<svg class="icon">
							<use xlink:href="#icon-cancel"></use>
						</svg>
					</a>
				</div>
				<form class="form-default">
					<div class="form-group">
						<i class="pt-customInputIcon">
                           <svg class="tt-icon">
                              <use xlink:href="#icon-search"></use>
                            </svg>
                        </i>
						<input type="text" name="name" class="form-control pt-customInputSearch" id="searchForum" placeholder="Search all forums">
					</div>
					<div class="form-group">
						<label for="searchName">Posted by</label>
						<input type="text" name="name" class="form-control" id="searchName" placeholder="Username">
					</div>
					<div class="form-group">
						<label for="searchCategory">In Category</label>
						<input type="text" name="name" class="form-control" id="searchCategory" placeholder="Add Category">
					</div>
					<div class="checkbox-group">
				        <input type="checkbox" id="searcCheckBox01" name="checkbox">
				        <label for="searcCheckBox01">
				            <span class="check"></span>
				            <span class="box"></span>
				            <span class="tt-text">Include all tags</span>
				        </label>
				    </div>
					<div class="form-group">
						<label>Only return topics/posts that...</label>
						<div class="checkbox-group">
					        <input type="checkbox" id="searcCheckBox02" name="checkbox">
					        <label for="searcCheckBox02">
					            <span class="check"></span>
					            <span class="box"></span>
					            <span class="tt-text">I liked</span>
					        </label>
					    </div>
					    <div class="checkbox-group">
					        <input type="checkbox" id="searcCheckBox03" name="checkbox">
					        <label for="searcCheckBox03">
					            <span class="check"></span>
					            <span class="box"></span>
					            <span class="tt-text">are in my messages</span>
					        </label>
					    </div>
					    <div class="checkbox-group">
					        <input type="checkbox" id="searcCheckBox04" name="checkbox">
					        <label for="searcCheckBox04">
					            <span class="check"></span>
					            <span class="box"></span>
					            <span class="tt-text">I’ve read</span>
					        </label>
					    </div>
					</div>
					<div class="form-group">
						<select class="form-control" id="searchTop">
							<option>any</option>
							<option>value 01</option>
							<option>value 02</option>
							<option>value 03</option>
						</select>
					</div>
					<div class="form-group">
						<label for="searchaTopics">Where topics</label>
						<select class="form-control" id="searchaTopics">
							<option>any</option>
							<option>value 01</option>
							<option>value 02</option>
							<option>value 03</option>
						</select>
					</div>
					<div class="form-group">
						<label for="searchAdvTime">Posted</label>
						<div class="row">
							<div class="col-6">
								<select class="form-control">
									<option>any</option>
									<option>value 01</option>
									<option>value 02</option>
									<option>value 03</option>
								</select>
							</div>
							<div class="col-6">
								<input type="text" name="name" class="form-control" id="searchAdvTime" placeholder="dd-mm-yyyy">
							</div>
						</div>
					</div>
					<div class="form-group">
						<label for="minPostCount">Minimum Post Count</label>
						<select class="form-control" id="minPostCount">
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
							<option>6</option>
							<option>7</option>
							<option>8</option>
							<option>9</option>
							<option selected>10</option>
						</select>
					</div>
					<div class="form-group">
						<a href="#" class="btn btn-secondary btn-block">Search</a>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

</form>
</div>
@endif
@endsection