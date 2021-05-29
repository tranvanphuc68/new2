@extends('layouts.customers.courses.app')

@section('title')
Into
@endsection

@section('content')
<main id="main">
    <form action="{{ url('/review_course') }}" method="post" enctype="multipart/form-data">
        @csrf
        <!-- ======= About Us Section ======= -->
        <section id="about-course" class="about-course" data-aos="fade-up" date-aos-delay="200">
            <div class="container">
                <div class="row">
                
                    <div class="col-lg-6 d-flex flex-column justify-content-center">
                        <input type="file" name="image">
                    </div>
                    <div class="col-lg-6 d-flex flex-column justify-content-center p-5">
                        <div class="about-box">
                            <h2><input type="text" name="course_name"></h2>
                            <p class="description text-primary">
                                <span><i class="fad fa-file-certificate"></i> Đầu vào: <input type="text" name="input"> </span>
                                <span class="ml-5"><i class="fad fa-graduation-cap"></i> Đầu ra: <input type="text" name="output">+</span>
                            </p>
                            <ul class="m-3">
                                <li><i class="fal fa-check-circle mr-2 text-primary"></i></i>Thời gian: <input type="text" name="time">h/buổi </li>
                                <li><i class="fal fa-check-circle mr-2 text-primary"></i></i>Thời lượng: <input type="text" name="duration"> giờ</li>
                                <li><i class="fal fa-check-circle mr-2 text-primary"></i></i>Học phí: <input type="text" name="tuition"> VNĐ</li>
                            </ul>
                            <h4>Mục tiêu khóa học</h4>
                            <p>
                                <input type="text" name="target">
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Why Us Section -->

        <!-- ======= Features Section ======= -->
        <section id="courses" class="courses">
            <div class="container">

                <div class="section-title">
                    <h2>CHI TIẾT KHÓA HỌC</h2>
                </div>

                <div class="row" data-aos="fade-up">
                    <div class="col-md-5">
                        <img src="{{ asset('assets/img/icon/features-1.svg') }}" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-7 pt-4">
                        <h3>ĐỐI TƯỢNG PHÙ HỢP VỚI KHÓA HỌC NÀY</h3>
                        <input type="text" name="student">
                    </div>
                </div>



            </div>
        </section>
        <!-- End Features Section -->


        <section id="fh5co-features" class="animate-box" data-aos="fade-up">
            <div class="container">
                <div class="services-padding">
                    <div class="row">
                        <div class="col-md-12 text-center fh5co-heading mb-5">
                            <h2>Nội dung khóa học</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 text-center" data-aos="fade-up" data-aos-delay="100">
                            <div class="feature-left">
                                <span class="icon">
                    <i class="fal fa-microphone-alt"></i>
                  </span>
                                <div class="feature-copy">
                                    <h3>SPEAKING</h3>
                                    <p><input type="text" name="skill_speaking"></p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 text-center" data-aos="fade-up" data-aos-delay="200">
                            <div class="feature-left">
                                <span class="icon">
                    <i class="fal fa-pencil-alt"></i>
                  </span>
                                <div class="feature-copy">
                                    <h3>WRITING</h3>
                                    <p><input type="text" name="skill_writing"></p>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-4 text-center" data-aos="fade-up" data-aos-delay="300">
                            <div class="feature-left">
                                <span class="icon">
                    <i class="fal fa-book-reader"></i>
                  </span>
                                <div class="feature-copy">
                                    <h3>LISTENING & READING</h3>
                                    <p><input type="text" name="skill_listening"></p>
                                    <p><input type="text" name="skill_reading"></p>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-4 text-center" data-aos="fade-up" data-aos-delay="400">

                            <div class="feature-left">
                                <span class="icon">
                    <i class="fal fa-books"></i>
                  </span>
                                <div class="feature-copy">
                                    <h3>NGỮ PHÁP</h3>
                                    <p><input type="text" name="grammar"></p>
                                </div>
                            </div>

                        </div>

                        <div class="col-md-4 text-center" data-aos="fade-up" data-aos-delay="500">
                            <div class="feature-left">
                                <span class="icon">
                    <i class="fal fa-file-word"></i>
                  </span>
                                <div class="feature-copy">
                                    <h3>TỪ VỰNG</h3>
                                    <p><input type="text" name="vocabulary"></p>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-4 text-center" data-aos="fade-up" data-aos-delay="600">
                            <div class="feature-left">
                                <span class="icon">
                    <i class="far fa-align-left"></i>
                  </span>
                                <div class="feature-copy">
                                    <h3>BÀI THI CUỐI KHÓA</h3>
                                    <p><input type="text" name="final_test"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="commit">
            <div class="container">
                <div class="row" data-aos="fade-up">
                    <div class="col-md-5 order-1 order-md-2">
                        <img src="{{ asset('assets/img/icon/features-4.svg') }}" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-7 pt-5 order-2 order-md-1">
                        <h3>Cam kết</h3>
                        <p class="font-italic">
                            Trong trường hợp học viên không đạt điểm đầu ra, các bạn sẽ được học lại 01 khóa học hoàn toàn miễn phí tại trung tâm. Tuy nhiên, các bạn học viên chú ý thực hiệu đầy đủ điều kiện làm đủ bài tập về nhà, đi học đủ số buổi học, trên lớp học tập chăm chỉ
                            dưới sự hướng dẫn của giáo viên giảng dạy.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- End #main -->
        <button type="submit">SAVE</button>
    </form>
    </main>
    <!-- End #main -->

@endsection