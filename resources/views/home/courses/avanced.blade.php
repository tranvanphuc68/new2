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
                        <img src="{{ asset('assets/img/courses/course7.jpg') }}"  class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 d-flex flex-column justify-content-center p-5">
                        <div class="about-box">
                            <h2>KHÓA HỌC AVANCED</h2>
                            <p class="description text-primary">
                                <span><i class="fad fa-file-certificate"></i> Đầu vào: 6.5 </span>
                                <span class="ml-5"><i class="fad fa-graduation-cap"></i> Đầu ra: 7.5+</span>
                            </p>
                            <ul class="m-3">
                                <li><i class="fal fa-check-circle mr-2 text-primary"></i></i>Thời gian: 1.5h/buổi </li>
                                <li><i class="fal fa-check-circle mr-2 text-primary"></i></i>Thời lượng: 51 giờ</li>
                                <li><i class="fal fa-check-circle mr-2 text-primary"></i></i>Học phí: 9.000.000 VNĐ</li>
                            </ul>
                            <h4>Mục tiêu khóa học</h4>
                            <p>
                                IELTS Avanced là khóa học nâng cao nhất tại INTO cung cấp các kỹ thuật làm bài phức tạp, vốn từ vựng và ngữ pháp nâng cao, kế hoạch câu trả lời hoàn chỉnh ở cả 4 kỹ năng. Khóa học tập trung nhiều hơn vào hai kỹ năng Speaking và Writing mức độ cao cấp,
                                giúp học viên đạt mục tiêu điểm IELTS từ 7.5 trở lên.
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
                            <li><i class="fal fa-check-circle mr-2 text-primary"></i>Học viên ở trình độ Advanced trở lên, có kỹ năng Đọc và Nghe rất tốt ( 7-8.0), có từ vựng phong phú, nền tảng tốt về Nói và Viết, đạt được điểm số cần thiết trong bài kiểm
                                tra đầu vào của INTO</li>
                            <li><i class="fal fa-check-circle mr-2 text-primary"></i>Học viên đã hoàn thành khóa IELTS INTERMEDIATE và được giáo viên đánh giá là đủ điều kiện tham gia lớp học.</li>
                            <li><i class="fal fa-check-circle mr-2 text-primary"></i>Có nền tảng tiếng Anh vững chắc</li>
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
                                    <p>Khóa học tập trung chuyên sâu cả 3 phần trong bài thi Speaking. Học viên sẽ được hướng dẫn và thực hành kỹ part 1 và part 2 là nền tảng giúp đạt tối đa band điểm ở part 3, được dạy chuyên sâu việc sử dụng linking word
                                        trong bài thi IELTS để đạt 7.0 trở lên.</p>
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
                                    <p>Phân tích kỹ thuật viết bài writing với các cấu trúc phù hợp nhưng chặt chẽ, logic để đạt band điểm cao. Học viên sẽ thực hành 7 bài viết Task 1 và 4 bài viết Task 2, do trực tiếp giảng viên chấm điểm và nhận xét.</p>
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
                                    <p>Các dạng câu hỏi thường gặp trong bài thi Listening & Reading sẽ được hướng dẫn về kỹ thuật làm bài và luyện tập.</p>
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
                                    <p>Những điểm ngữ pháp chính cần cho bài thi IELTS sẽ được review và hướng dẫn đối với từng dạng bài cụ thể.</p>
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
                                    <p>Khóa học sẽ dùng rất nhiều từ vựng học thuật nâng cao qua rất nhiều topic trong bài thi IELTS được thảo luận.</p>
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
                                    <p>theo hình thức bài thi IELTS hoàn chỉnh giúp học viên có cách nhìn tổng quan về 4 kỹ năng sau khi khóa học kết thúc.</p>
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
                        <img src="{{ asset('assets/img/icon/features-4.svg') }" class="img-fluid" alt="">
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