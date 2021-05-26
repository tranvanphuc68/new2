@extends('layouts.customers.courses.app')

@section('title')
Into
@endsection
@section('content')
<main id="main">
    <!-- ======= About Us Section ======= -->
    <!-- <section id="about-course" class="about-course" data-aos="fade-up" date-aos-delay="200">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center">
                    <img src="{{ asset('assets/img/courses/course7.jpg') }}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 d-flex flex-column justify-content-center p-5">
                    <div class="about-box">
                        <h2>KHÓA HỌC FOUNDATION</h2>
                        <p class="description text-primary">
                            <span><i class="fad fa-file-certificate"></i> Đầu vào: 3.0 </span>
                            <span class="ml-5"><i class="fad fa-graduation-cap"></i> Đầu ra: 4.5+</span>
                        </p>
                        <ul class="m-3">
                            <li><i class="fal fa-check-circle mr-2 text-primary"></i></i>Thời gian: 1.5h/buổi </li>
                            <li><i class="fal fa-check-circle mr-2 text-primary"></i></i>Thời lượng: 48 giờ</li>
                            <li><i class="fal fa-check-circle mr-2 text-primary"></i></i>Học phí: 3.000.000 VNĐ</li>
                        </ul>
                        <h4>Mục tiêu khóa học</h4>
                        <p>
                            Khóa học IELTS Foundation được thiết kế dành riêng cho các bạn chưa tự tin sử dụng tiếng anh trong môi trường học thuật và giao tiếp hằng ngày. Chương trình học theo chủ đề, các hoạt động bổ trợ Nghe – Nói- Đọc tạo không gian giúp học viên tăng vốn từ,
                            phát âm chuẩn xác, khả năng phản xạ, sự tự tin và sử dụng thuần thục từ mới ngay tại lớp.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
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
                        <li><i class="fal fa-check-circle mr-2 text-primary"></i>Chưa có nền tảng tiếng Anh vững chắc</li>
                        <li><i class="fal fa-check-circle mr-2 text-primary"></i>Chưa từng tiếp xúc với IELTS, không nắm rõ được cấu trúc bài thi , dạng đề thi IELTS</li>
                        <li><i class="fal fa-check-circle mr-2 text-primary"></i>Ngữ pháp còn yếu, chưa biết cách nhận dạng và sử dụng các dạng từ phổ biến
                        </li>
                        <li><i class="fal fa-check-circle mr-2 text-primary"></i>Chưa biết cách phát âm, phát âm chưa chuẩn, còn sai nhiều âm cơ bản.</li>
                        <li><i class="fal fa-check-circle mr-2 text-primary"></i>Nghe chưa tốt, chưa biết cách nghe tiếng Anh hiệu quả</li>
                        <li><i class="fal fa-check-circle mr-2 text-primary"></i>Chưa có nền tảng tiếng Anh vững chắc</li>
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
                                <p>Khóa học chuẩn hóa hệ thống phát âm, sắp xếp ý tưởng, vận dụng từ vựng, đặc biệt nhấn mạnh vào những phần học viên Việt Nam hay mắc lỗi.</p>
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
                                <p>Khóa học giới thiệu về Writing task 1, thực hành viết câu đơn giản và note-taking trong quá trình học. Học viên được luyện cách so sánh đơn giản và miêu tả thông tin từ biểu đồ.</p>
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
                                <p>Học viên sẽ được làm quen với các dạng câu hỏi khác nhau trong phần thi IELTS Listening và IELTS Reading: Gap fills, multiple choice, classification, labeling a diagram,… và một số chiến lược làm bài cơ bản.</p>
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
                                <p>Hệ thống các điểm ngữ pháp căn bản cho bài thi IELTS. Cung cấp các hướng dẫn ngữ pháp quan trọng từ đại học Cambridge. Học viên được thực hành qua các bài tập về các về: thì của động từ, số đếm, câu điều kiện, mệnh
                                    đề, ...</p>
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
                                <p>Gồm 10 chủ đề phổ biến khác nhau: daily life, house and home, travel and holidays, food, health and medicine, language,...</p>
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