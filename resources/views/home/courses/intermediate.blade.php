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
                            <h2>KHÓA HỌC INTERMEDIATE</h2>
                            <p class="description text-primary">
                                <span><i class="fad fa-file-certificate"></i> Đầu vào: 5.5 </span>
                                <span class="ml-5"><i class="fad fa-graduation-cap"></i> Đầu ra: 6.5+</span>
                            </p>
                            <ul class="m-3">
                                <li><i class="fal fa-check-circle mr-2 text-primary"></i></i>Thời gian: 1.5h/buổi </li>
                                <li><i class="fal fa-check-circle mr-2 text-primary"></i></i>Thời lượng: 51 giờ</li>
                                <li><i class="fal fa-check-circle mr-2 text-primary"></i></i>Học phí: 7.000.000 VNĐ</li>
                            </ul>
                            <h4>Mục tiêu khóa học</h4>
                            <p>
                                Khóa học cung cấp đầy đủ tất cả các kiến thức nâng cao về từ vựng, cấu trúc, cách phân tích, tổ chức bài thi để đạt được mức điểm 6.5+ trong bài thi IELTS. Khóa học đặc biệt chú trọng vào hai kỹ năng Nói và Viết giúp học viên có nhiều cơ hội luyện tập,
                                được chỉnh sửa dưới sự hướng dẫn của giáo viên bản ngữ.
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
                            <li><i class="fal fa-check-circle mr-2 text-primary"></i>Có nền tảng ngữ pháp cơ bản</li>
                            <li><i class="fal fa-check-circle mr-2 text-primary"></i>Có thể nhận dạng được các loại từ phổ biến (danh, động, tính, trạng) nhưng sử dụng trong văn nói/ viết còn sai, đặc biệt là khi viết câu dài</li>
                            <li><i class="fal fa-check-circle mr-2 text-primary"></i>Giọng nói đơn điệu; Không để ý nhấn trọng âm của từ</li>
                            <li><i class="fal fa-check-circle mr-2 text-primary"></i>Hiểu biết về IELTS</li>
                            <li><i class="fal fa-check-circle mr-2 text-primary"></i>Không có chiến thuật làm bài rõ ràng, đặc biệt là trong phần thi Listening và Reading</li>
                            <li><i class="fal fa-check-circle mr-2 text-primary"></i>Không quen với các loại đề trong Writing và Speaking</li>
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
                                    <p>Học viên được luyện tập cả 3 phần trong bài thi Speaking vào mỗi buổi học nhằm biết được phương pháp hình thành nên bài nói theo đúng format bài thi IELTS.</p>
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
                                    <p>Khóa học sẽ tập trung vào tất cả các dạng bài Writing reports và essays, cách sử dụng các điểm từ ngữ để làm bài viết trở nên mượt mà hơn và xây dựng được vốn từ vựng theo từng chủ đề.</p>
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
                                    <p>Toàn bộ các dạng câu hỏi trong bài thi Listening và Reading đều được luyện tập theo các chủ đề với độ dài và độ khó như bài thi thật.</p>
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
                                    <p>Bổ sung những điểm ngữ pháp nâng cao, xen kẽ các điểm ngữ pháp cần thiết giúp nâng cao điểm Writing và Speaking trên 6.5.</p>
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
                                    <p>Phát triển vốn từ vựng với các chủ đề thường gặp xuyên suốt 32 bài học tại lớp. Cung cấp các từ vựng phổ biến bổ trợ luyện tập Speaking.</p>
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
                                    <p>Theo hình thức bài thi IELTS hoàn chỉnh giúp học viên có cách nhìn tổng quan về 4 kỹ năng sau khi khóa học kết thúc.</p>
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