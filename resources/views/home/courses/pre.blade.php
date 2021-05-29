@extends('layouts.customers.courses.app')

@section('title')
Into
@endsection

@section('content')
<main id="main">
        <!-- ======= About Us Section ======= -->
        <section id="about-course" class="about-course" data-aos="fade-up" date-aos-delay="200">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 d-flex flex-column justify-content-center">
                        <img src="{{ asset('assets/img/courses/course7.jpg') }}"  class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 d-flex flex-column justify-content-center p-5">
                        <div class="about-box">
                            <h2>KHÓA HỌC PRE</h2>
                            <p class="description text-primary">
                                <span><i class="fad fa-file-certificate"></i> Đầu vào: 4.0 </span>
                                <span class="ml-5"><i class="fad fa-graduation-cap"></i> Đầu ra: 5.5+</span>
                            </p>
                            <ul class="m-3">
                                <li><i class="fal fa-check-circle mr-2 text-primary"></i></i>Thời gian: 1.5h/buổi </li>
                                <li><i class="fal fa-check-circle mr-2 text-primary"></i></i>Thời lượng: 48 giờ</li>
                                <li><i class="fal fa-check-circle mr-2 text-primary"></i></i>Học phí: 5.000.000 VNĐ</li>
                            </ul>
                            <h4>Mục tiêu khóa học</h4>
                            <p>
                                Khóa học Pre IELTS là sự tiếp nối của Foundation, cung cấp các kiến thức nền tảng cho kỳ thi IELTS. Được thiết kế dành riêng cho các bạn chưa tự tin sử dụng tiếng anh trong môi trường học thuật và giao tiếp hằng ngày, khóa học giúp nâng cao khả năng phản
                                xạ, sự tự tin, vốn từ vựng và khả năng phát âm chuẩn xác.
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
                        <ul>
                            <li><i class="fal fa-check-circle mr-2 text-primary"></i>Đã có những kiến thức cơ bản về tiếng Anh nhưng kiến thức chưa vững</li>
                            <li><i class="fal fa-check-circle mr-2 text-primary"></i>Khó khăn trong việc nhận dạng và sử dụng các dạng từ phổ thông (danh - động - tính - trạng)</li>
                            <li><i class="fal fa-check-circle mr-2 text-primary"></i>Phát âm không chuẩn; Còn nhầm lẫn trong cách phát âm một số âm</li>
                            <li><i class="fal fa-check-circle mr-2 text-primary"></i>Giọng nói đơn điệu Không để ý nhấn trọng âm của từ</li>
                            <li><i class="fal fa-check-circle mr-2 text-primary"></i>Chưa hiểu về IELTS, Không biết cấu trúc bài thi, Không quen với các dạng câu hỏi trong từng phần thi</li>
                        </ul>
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
                                    <p>Khóa học tập trung chuyên sâu vào Speaking part 1 và 2. Hướng dẫn chiến thuật làm bài, cấu trúc câu trả lời, sắp xếp ý tưởng, sử dụng từ vựng. Ngoài ra, học viên được giới thiệu cơ bản về part 3 trong thời gian thực
                                        hành trên lớp.</p>
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
                                    <p>Khóa học giới thiệu về Writing task 1, task 2 và chiến lược làm bài cơ bản. Luyện tập viết task 1 cho 2 dạng: pie chart và line/bar graph dưới dạng các câu so sánh cơ bản. Thực hành viết task 2 dạng Problem – Solution.</p>
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
                                    <p>Học viên sẽ được thực hành với các dạng câu hỏi khác nhau trong phần thi IELTS Listening và IELTS Reading: Gap fills, multiple choice, classification, labeling a diagram,… và một số chiến lược làm bài hiệu quả.</p>
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
                                    <p>Khóa học hệ thống các điểm ngữ pháp căn bản cho bài thi IELTS: thì của động từ, số đếm, câu điều kiện, mệnh đề.... cung cấp các hướng dẫn ngữ pháp quan trọng từ đại học Cambridge.</p>
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
                                    <p>Gồm 08 chủ đề phổ biến khác nhau: relationships, places and building, food and drink, leisure time, nature world,...</p>
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
                                    <p>Bài kiểm tra gồm 4 kỹ năng giúp học viên đánh giá năng lực sau khóa học.</p>
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

    </main>
    <!-- End #main -->


@endsection