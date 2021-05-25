@extends('layouts.customers.app')

@section('title')
Into
@endsection
<!-- ======= Hero Section ======= -->
@section('content')
<section id="hero">
  <div class="hero-container" data-aos="fade-up">
    <h1>Welcome to Into</h1>
    <h2  style="font-size: 30px;" >Chinh phục IELTS 6.5+ với hệ thống giáo dục trực tuyến tại INTO</h2>
    <a href="#about" class="btn-get-started scrollto"><i class="bx bx-chevrons-down"></i></a>
  </div>
</section><!-- End Hero -->

<main id="main">

  <!-- ======= About us ======= -->
  <section id="about" class="about">
    <div class="container">
    
      <div class="row no-gutters">
        <div class="content col-xl-5 d-flex align-items-stretch" data-aos="fade-up">
          <div class="content">
            <h3>VỀ CHÚNG TÔI</h3>
            <img src="{{ asset('assets/img/about-us.jpg') }}" class="about-img" alt="" >
            <p>
              INTO IELTS tập trung đào tạo IELTS với tôn chỉ phát triển về chất lượng thay vì số lượng. INTO tự hào mang đến những khóa học IELTS online hiệu quả với chất lượng giảng dạy hàng đầu. 
            </p>
            <a href="#" class="about-btn" >TÌM HIỂU THÊM <i class="bx bx-chevron-right"></i></a>
          </div>
        </div>
        <div class="col-xl-7 d-flex align-items-stretch">
          <div class="icon-boxes d-flex flex-column justify-content-center">
            <div class="row">
              <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                <i class="bx bx-receipt"></i>
                <h4>ĐÁP ỨNG ĐÚNG NHU CẦU</h4>
                <p>Chương trình học phù hợp với trình độ, nhu cầu, sở thích, ngành nghề của bạn. </p>
              </div>
              <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                <i class="fal fa-user-alt"></i>
                <h4>GIAO TIẾP GIÁO VIÊN BẢN XỨ</h4>
                <p>Tiếp cận với môi trường giao tiếp không giới hạn với giáo viên bản xứ chất lượng. </p>
              </div>
              <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                <i class="bx bx-images"></i>
                <h4>CẢI THIỆN TOÀN DIỆN KỸ NĂNG</h4>
                <p>Giúp bạn vừa được giáo viên và trợ giảng hướng dẫn trực tiếp, vừa được rèn luyện thường xuyên tại nhà.</p>
              </div>
              <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                <i class="fal fa-alarm-clock"></i>
                <h4>THỜI GIAN HỌC LINH ĐỘNG</h4>
                <p>Chủ động cải thiện tiếng Anh mọi nơi mọi lúc, trên bất cứ thiết bị điện tử nào có kết nối internet.</p>
              </div>
            </div>
          </div><!-- End .content-->
        </div>
      </div>

    </div>
  </section><!-- End About Section -->

  <!-- ======= course ======= -->
  <section id="services" class="services">
    <div class="container">

      <div class="section-title" data-aos="fade-in" data-aos-delay="100">
        <h2>CÁC KHÓA HỌC</h2>
        <p>Các khoá học được thiết kế bởi chính đội ngũ chuyên gia IELTS tại INTO, lấy học viên làm trung tâm, được cá nhân hóa, cập nhật thường xuyên để phản ánh những thay đổi trong kỳ thi IELTS.</p>
      </div>

      <div class="row">
        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-3 mb-lg-0">
              <div class="card" data-aos="fade-up" data-aos-delay="100">
                  <img  src="{{ asset('assets/img/courses/course9.jpg') }}" alt="">
                  <div class="card-body" style=" display: flex; flex-direction: column;align-items: center; justify-content: space-between;">
                      <h5 class="card-title" style="font-weight: bold;">KHÓA FOUNDATION </h5>
                      <h6 class="card-subtitle mb-1 text-muted">Đầu vào: 3.0 </h6>
                      <h6 class="card-subtitle mb-1 text-muted">Đầu ra: 4.0+</h6>
                      <a href="{{url('/review_course/foudation')}}" class="btn btn-primary">Xem chi tiết</a>
                  </div>
              </div>
            </div>
        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-3 mb-lg-0">

              <div class="card" data-aos="fade-up" data-aos-delay="200">
                  <img  src="{{ asset('assets/img/courses/course9.jpg') }}" alt="">
                  <div class="card-body" style=" display: flex; flex-direction: column;align-items: center; justify-content: space-between;">
                      <h5 class="card-title" style="font-weight: bold;">KHÓA PRE </h5>
                      <h6 class="card-subtitle mb-1 text-muted">Đầu vào: 4.0 </h6>
                      <h6 class="card-subtitle mb-1 text-muted">Đầu ra: 5.5+</h6>
                      <a href="{{url('/review_course/pre')}}" class="btn btn-primary">Xem chi tiết</a>
                  </div>
              </div>
            </div>
        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-3 mb-lg-0">
              <div class="card" data-aos="fade-up" data-aos-delay="300">
                  <img  src="{{ asset('assets/img/courses/course9.jpg') }}" alt="">
                  <div class="card-body" style=" display: flex; flex-direction: column;align-items: center; justify-content: space-between;">
                      <h5 class="card-title" style="font-weight: bold;" >KHÓA INTERMEDIATE </h5>
                      <h6 class="card-subtitle mb-1 text-muted">Đầu vào: 5.5 </h6>
                      <h6 class="card-subtitle mb-1 text-muted">Đầu ra: 6.5+</h6>
                      <a href="{{url('/review_course/intermediate')}}" class="btn btn-primary">Xem chi tiết</a>
                  </div>
              </div>
            </div>
        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-3 mb-lg-0">

              <div class="card" data-aos="fade-up" data-aos-delay="400">
                  <img  src="{{ asset('assets/img/courses/course9.jpg') }}" alt="">
                  <div class="card-body" style=" display: flex; flex-direction: column;align-items: center; justify-content: space-between;">
                      <h5 class="card-title" style="font-weight: bold;" >KHÓA AVANCED </h5>
                      <h6 class="card-subtitle mb-1 text-muted">Đầu vào: 6.5 </h6>
                      <h6 class="card-subtitle mb-1 text-muted">Đầu ra: 7.5+</h6>
                      <a href="{{url('/review_course/avanced')}}" class="btn btn-primary">Xem chi tiết</a>
                  </div>
              </div>
            </div>
        </div>

      </div>


  </section><!-- End Services Section -->



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


  <!-- ======= Feedbacks Section ======= -->
  <section id="testimonials" class="testimonials section-bg">
        <div class="container">

            <div class="section-title" data-aos="fade-in" data-aos-delay="100">
                <h2>Học viên nói gì về INTO ?</h2>
            </div>

            <div class="owl-carousel testimonials-carousel">

                <div class="testimonial-item" data-aos="fade-up">
                    <p>
                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                        "Với một lộ trình cụ thể, phù hợp cùng với việc sử dụng tiếng Anh rèn luyện kỹ năng mềm giúp nâng cao phản xạ ngôn ngữ, tiếng Anh giờ đây đã trở thành ngôn ngữ thứ hai của tôi"
                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                    <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                    <h3>Trần Trung Nam</h3>
                    <h4>Sinh viên NUCE</h4>
                </div>

                <div class="testimonial-item" data-aos="fade-up" data-aos-delay="100">
                    <p>
                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                        "Người đi làm khá bận với công việc nên không có nhiều thời gian vì vậy sau một ngày làm việc căng thẳng và mệt, tôi chọn một lớp học tiếng Anh tạo INTO. Thật may mắn, INTO đã giúp tôi tìm lại được niềm đam mê, hứng thú với Anh ngữ. Học Tiếng Anh giờ đây chỉ là chuyện nhỏ. "
                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                    <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                    <h3>Nguyễn Minh Ngọc</h3>
                    <h4>Lễ tân khách sạn</h4>
                </div>

                <div class="testimonial-item" data-aos="fade-up" data-aos-delay="200">
                    <p>
                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                        "Vì em bị kém phần phát âm nên thầy cô luôn tranh thủ dạy ngoài giờ, chỉnh sửa cho em từng chút một. Điều khiến em ấn tượng và xúc động nhất là sự tận tâm, nhiệt huyết của các thầy cô tại đây. Những người luôn cố gắng, nỗ lực dốc hết sức mình để giúp học viên chinh phục được mục tiêu tiếng Anh."
                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                    <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                    <h3>Nguyễn Xuân Bắc</h3>
                    <h4>Học sinh THPT</h4>
                </div>

                <div class="testimonial-item" data-aos="fade-up" data-aos-delay="300">
                    <p>
                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                        "Trước đây, mục tiêu học Tiếng Anh của mình chỉ là để tốt nghiệp nhưng khi theo học tại INTO mình đã có mục tiêu mới đó đi là đi du học…"
                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                    <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                    <h3>Lê Thu Huyền</h3>
                    <h4>học viên khóa TOEFL IBT 94-101</h4>
                </div>

                <div class="testimonial-item" data-aos="fade-up" data-aos-delay="400">
                    <p>
                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                        "Lựa chọn INTO là một quyết định sáng suốt của bản thân vì không chỉ được cải thiện cả 4 kỹ năng nghe – nói – đọc – viết tiếng Anh mà ở đó Tuấn Anh cảm thấy mình tự tin hơn nhiều, quen được nhiều người bạn mới, thầy cô tận tình giúp đỡ,… ""
                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                    <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                    <h3>Tuấn Anh</h3>
                    <h4>sinh viên NEU</h4>
                </div>

            </div>

        </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Teachers Section ======= -->
    <section id="team" class="team">
        <div class="container">

            <div class="section-title" data-aos="fade-in" data-aos-delay="100">
                <h2>Đội ngũ giảng viên của INTO</h2>
            </div>

            <div class="row">

                <div class="col-lg-4 col-md-6">
                    <div class="member" data-aos="fade-up">
                        <div class="pic"><img src="assets/img/team/team-1.jpg" class="img-fluid" alt=""></div>
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

                <div class="col-lg-4 col-md-6">
                    <div class="member" data-aos="fade-up" data-aos-delay="150">
                        <div class="pic"><img src="assets/img/team/team-2.jpg" class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <h4>Sarah Jhonson</h4>
                            <span>giảng viên TOEIC 605-780</span>
                            <div class="social">
                                <a href=""><i class="icofont-twitter"></i></a>
                                <a href=""><i class="icofont-facebook"></i></a>
                                <a href=""><i class="icofont-instagram"></i></a>
                                <a href=""><i class="icofont-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="member" data-aos="fade-up" data-aos-delay="300">
                        <div class="pic"><img src="assets/img/team/team-3.jpg" class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <h4>William Anderson</h4>
                            <span>giảng viên TOEFL IBT 110-114</span>
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
    </section><!-- End Team Section -->

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