@extends('layouts.customers.courses.app')

@section('title')
Into
@endsection
<!-- ======= Hero Section ======= -->
@section('content')
<main id="main">

    <section id="about-into" class="about-course" data-aos="fade-up" date-aos-delay="100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center">
                    <img src="{{ asset('assets/img/courses/course3.jpg') }}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 d-flex flex-column justify-content-center p-5">
                    <div class="about-box">
                        <h2 class="border-bottom-blue">Giới thiệu về INTO</h2>
                        <p>
                            INTO là tổ chức giáo dục trực tuyến được thành lập vào năm 2018, chuyên tập trung đào tạo IELTS. Suốt những năm qua, INTO luôn được khách hàng đánh giá là một trong những trung tâm IELTS có chất lượng đào tạo cao tại Việt Nam. Và cho đến nay, KTDC tiếp tục duy trì tiêu chuẩn đó và gìn giữ sự hài lòng thông qua chất lượng giáo dục và dịch vụ khách hàng mà KTDC cung cấp.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======= Features Section ======= -->
    <section id="courses" class="detail" data-aos="fade-up" date-aos-delay="100">
        <div class="container">
            <div class="row" data-aos="fade-up" date-aos-delay="200">
                <div class="col-md-5 order-1 order-md-2">
                    <img src="{{ asset('assets/img/icon/features-2.svg') }}" class="img-fluid" alt="">
                </div>
                <div class="col-md-7 order-2 order-md-1 pt-4">
                    <div class="">
                        <h3 class="border-bottom-blue">Tầm nhìn</h3>
                        <p>INTO đặt tầm nhìn trở thành một trong những đơn vị đào tạo IELTS hàng đầu, truyền cảm hứng cho việc học tập và giảng dạy IELTS cho người Việt.</p>
                    </div>
                    <div class="">
                        <h3 class="border-bottom-blue">Sứ mệnh</h3>
                        <p>INTO IELTS mong muốn góp phần tạo ra các tiêu chuẩn cao nhất trong lĩnh vực đào tạo IELTS, thúc đẩy học viên giao tiếp tự tin, củng cố kỹ năng cần thiết để thành công trong học tập, công việc và cuộc sống.
                            Thông qua kiến thức và kỹ năng được cung cấp, các bạn có thể xây dựng sự độc lập trong tư duy và hành động, nhận thức văn hóa, và trở thành công dân toàn cầu.</p>
                    </div>
                </div>
            </div>



        </div>
    </section>
    <!-- End Features Section -->

    <section id="commit">
        <div class="container">
            <div class="row" data-aos="fade-up" date-aos-delay="300">
                <div class="col-md-5 ">
                    <img src="{{ asset('assets/img/icon/features-4.svg') }}" class="img-fluid" alt="">
                </div>
                <div class="col-md-7 pt-5 ">
                    <h3 class="border-bottom-blue">Cam kết</h3>
                    <p class="font-italic">
                        Trong trường hợp học viên không đạt điểm đầu ra, các bạn sẽ được học lại 01 khóa học hoàn toàn miễn phí tại trung tâm. Tuy nhiên, các bạn học viên chú ý thực hiệu đầy đủ điều kiện làm đủ bài tập về nhà, đi học đủ số buổi học, trên lớp học tập chăm chỉ
                        dưới sự hướng dẫn của giáo viên giảng dạy.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts  section-bg">
        <div class="container">

            <div class="row no-gutters">

                <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                    <div class="count-box">
                        <i class="icofont-simple-smile"></i>
                        <span data-toggle="counter-up">1,000</span>
                        <p><strong>Học viên hài lòng</strong></p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                    <div class="count-box">
                        <i class="icofont-teacher"></i>
                        <span data-toggle="counter-up">300</span>
                        <p><strong>Giáo viên bản ngữ</strong></p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                    <div class="count-box">
                        <i class="icofont-live-support"></i>
                        <span data-toggle="counter-up">1,463</span>
                        <p><strong>Giờ hỗ trợ</strong></p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                    <div class="count-box">
                        <i class="icofont-users-alt-5"></i>
                        <span data-toggle="counter-up">1,300</span>
                        <p><strong>Học viên đã tham gia</strong></p>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Counts Section -->



    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
        <div class="container" data-aos="zoom-in">
            <div class="text-center">
                <h3>“ The limits of my language mean the limits of my world ” </h3>
                <h3 style="text-align: center;">- Ludwig Wittgenstein</h3>
                <p>Giới hạn về ngôn ngữ là giới hạn về nhận thức, về thế giới.</p>
                <a class="cta-btn" href="#">Call To Action</a>
            </div>

        </div>
    </section><!-- End Cta Section -->


    <!-- ======= Teachers Section ======= -->
    <section id="team" class="ftco-section team">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title" data-aos="fade-in" data-aos-delay="100">
                        <h2>Đội ngũ giảng viên của INTO</h2>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="featured-carousel owl-carousel">
                        <div class="item member" data-aos="fade-up" data-aos-delay="100">
                            <div class="work">
                                <div class="pic"><img src="{{ asset('assets/img/team/team-1.jpg') }}" class="img-fluid" alt=""></div>
                                <div class="member-info">
                                    <h4>Walter White</h4>
                                    <span>giảng viên IELTS khóa 4.5-5.0 </span>
                                    <div class="social">
                                        <a href=""><i class="icofont-twitter"></i></a>
                                        <a href=""><i class="icofont-facebook"></i></a>
                                        <a href=""><i class="icofont-instagram"></i></a>
                                        <a href=""><i class="icofont-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item member" data-aos="fade-up" data-aos-delay="100">
                            <div class="work">
                                <div class="pic"><img src="{{ asset('assets/img/team/team-2.jpg') }}" class="img-fluid" alt=""></div>
                                <div class="member-info">
                                    <h4>Walter White</h4>
                                    <span>giảng viên IELTS khóa 4.5-5.0 </span>
                                    <div class="social">
                                        <a href=""><i class="icofont-twitter"></i></a>
                                        <a href=""><i class="icofont-facebook"></i></a>
                                        <a href=""><i class="icofont-instagram"></i></a>
                                        <a href=""><i class="icofont-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item member" data-aos="fade-up" data-aos-delay="100">
                            <div class="work">
                                <div class="pic"><img src="{{ asset('assets/img/team/team-3.jpg') }}" class="img-fluid" alt=""></div>
                                <div class="member-info">
                                    <h4>Walter White</h4>
                                    <span>giảng viên IELTS khóa 4.5-5.0 </span>
                                    <div class="social">
                                        <a href=""><i class="icofont-twitter"></i></a>
                                        <a href=""><i class="icofont-facebook"></i></a>
                                        <a href=""><i class="icofont-instagram"></i></a>
                                        <a href=""><i class="icofont-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item member" data-aos="fade-up" data-aos-delay="100">
                            <div class="work">
                                <div class="pic"><img src="{{ asset('assets/img/team/team-3.jpg') }}" class="img-fluid" alt=""></div>
                                <div class="member-info">
                                    <h4>Walter White</h4>
                                    <span>giảng viên IELTS khóa 4.5-5.0 </span>
                                    <div class="social">
                                        <a href=""><i class="icofont-twitter"></i></a>
                                        <a href=""><i class="icofont-facebook"></i></a>
                                        <a href=""><i class="icofont-instagram"></i></a>
                                        <a href=""><i class="icofont-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
        <div class="container">

            <div class="section-title" data-aos="fade-in" data-aos-delay="100">
                <h2>Contact</h2>
            </div>

            <div class="row" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-6">
                    <div class="info-box mb-4">
                        <i class="bx bx-map"></i>
                        <h3>Our Address</h3>
                        <p>Số 51, Đường Lê Đại Hành, Phường Lê Đại Hành, Quận Hai Bà Trưng, Hà Nội</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="info-box  mb-4">
                        <i class="bx bx-envelope"></i>
                        <h3>Email Us</h3>
                        <p>contact@example.com</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="info-box  mb-4">
                        <i class="bx bx-phone-call"></i>
                        <h3>Call Us</h3>
                        <p>+1 5589 55488 55</p>
                    </div>
                </div>

            </div>

            <div class="row" data-aos="fade-up" data-aos-delay="200">

                <div class="col-lg-6 ">
                    <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.499196683438!2d105.848478367625!3d21.01270284160628!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab8bc402bd27%3A0x125318f068f125c9!2zVHJ1bmcgdMOibSBUaMawxqFuZyBt4bqhaSB2w6AgVsSDbiBwaMOybmcgVsOibiBI4buTLCA1MSBQaOG7kSBMw6ogxJDhuqFpIEjDoG5oLCBMw6ogxJDhuqFpIEjDoG5oLCBIYWkgQsOgIFRyxrBuZywgSMOgIE7hu5lpLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1620641734188!5m2!1svi!2s" width="100%" height="384" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>

                <div class="col-lg-6">
                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="form-row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                <div class="validate"></div>
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                                <div class="validate"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                            <div class="validate"></div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                            <div class="validate"></div>
                        </div>
                        <div class="mb-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div class="text-center"><button type="submit">Send Message</button></div>
                    </form>
                </div>

            </div>

        </div>
    </section><!-- End Contact Section -->

</main><!-- End #main -->


@endsection