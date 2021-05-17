@extends('layouts.customers.app')

@section('title')
    Into
@endsection
<!-- ======= Hero Section ======= -->
@section('content')
<section id="hero">
    <div class="hero-container" data-aos="fade-up">
      <h1>Welcome to Into</h1>
      <h2>Platform for searching and booking online English classes</h2>

      <!-- form search  -->
      <div id="search">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-center section" style="padding-top: 0;">
              <h2 class="blue header-text text-uppercase" style="font-size: 16px;letter-spacing: 0.3em;">
                <i class="fa fa-search"></i> Tìm kiếm khóa học
              </h2>
              <div class="bar"></div>
            </div>
          </div>

          <div class="pp-live-search">
            <form action="">
              <div class="row">
                    <div class="col-md-5">
                      <div class="form-group">
                        <select name="loaiKhoa" id="loaiKhoa" data-placeholder="Chọn khóa" class="select2 form-control select2-hidden-accessible" tabindex="-1" aria-hidden="true">
                          <option value="">Chọn khóa</option>
                          <option value="1">IETLS</option>
                          <option value="2">TOEIC</option>
                          <option value="3">TOEFL IBT</option>
                        </select>
                        <span class="select2 select2-container select2-container--default select2-container--below" dir="ltr" style="width: 167px;">
                          <span class="selection">
                            <span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-loaiKhoa-container">
                              <span class="select2-selection__arrow" role="presentation">
                                <b role="presentation"></b>
                              </span>
                            </span>
                          </span>
                          <span class="dropdown-wrapper" aria-hidden="true"></span>
                        </span>
                      </div>
                    </div>

                    <div class="col-md-5">
                      <div class="form-group">
                        <select name="level" id="level" data-placeholder="point level" class="select2 form-control select2-hidden-accessible" tabindex="-1" aria-hidden="true">
                          <option value="">Mức điểm</option>
                          <option value="1"></option>
                          <option value="2"></option>
                        </select>
                        <span class="select2 select2-container select2-container--default select2-container--below" dir="ltr" style="width: 167px;">
                          <span class="selection">
                            <span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-loaiKhoa-container">
                              <span class="select2-selection__arrow" role="presentation">
                                <b role="presentation"></b>
                              </span>
                            </span>
                          </span>
                          <span class="dropdown-wrapper" aria-hidden="true"></span>
                        </span>
                      </div>
                    </div>

                    <div class="col-md-2">
                        <div class="input-group-btn">
                          <button class="btn btn-primary btn-block btn-custom" id="btnSearchKhoaHoc"><i class="fa fa-search" style="font-size: 16px;"></i></button>
                        </div>
                    </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <!-- end form search -->

      <a href="#about" class="btn-get-started scrollto"><i class="bx bx-chevrons-down"></i></a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row no-gutters">
          <div class="content col-xl-5 d-flex align-items-stretch" data-aos="fade-up">
            <div class="content">
              <h3>Giới thiệu về INTO</h3>
              <p class="text-align-justify">
                INTO mang sứ mệnh giúp cải thiện và nâng cao tiếng Anh cho người đi làm, sinh viên dễ dàng có được cơ hội việc làm và hội nhập sâu rộng trong nền kinh tế tri thức. INTO mang đến những phương pháp giáo dục tiên tiến, ứng dụng công nghệ tối đa. Chúng tôi phát triển các dịch vụ dựa trên giá trị cốt lõi của tính trách nhiệm, sự linh hoạt và sáng tạo. Mỗi sản phẩm, dịch vụ và hành động của INTO đều đáp ứng 3 tiêu chí: linh hoạt, tiết kiệm và hiệu quả.
              </p>
              <a href="#" class="about-btn">About us <i class="bx bx-chevron-right"></i></a>
            </div>
          </div>
          <div class="col-xl-7 d-flex align-items-stretch">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                  <ul class="intro-list">
                    <li>
                      <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="icon" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M362.6 192.9L345 174.8c-.7-.8-1.8-1.2-2.8-1.2-1.1 0-2.1.4-2.8 1.2l-122 122.9-44.4-44.4c-.8-.8-1.8-1.2-2.8-1.2-1 0-2 .4-2.8 1.2l-17.8 17.8c-1.6 1.6-1.6 4.1 0 5.7l56 56c3.6 3.6 8 5.7 11.7 5.7 5.3 0 9.9-3.9 11.6-5.5h.1l133.7-134.4c1.4-1.7 1.4-4.2-.1-5.7z"></path></svg>
                      <h4>Tính linh hoạt</h4>
                    </li>
                  </ul>
                  <p class="text-align-justify">Tính linh hoạt của một khóa học trực tuyến là rõ ràng bởi vì bản chất của Internet, nền tảng của công nghệ cho việc học trực tuyến là linh hoạt. Khi các bạn được tham gia một khóa học của INTO bạn linh hoạt được thời gian xem lại video bài giảng, tài liệu, bài tập, trao đổi bài với giảng viên và các học viên khác.</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                  <ul class="intro-list">
                    <li>
                      <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="icon" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M362.6 192.9L345 174.8c-.7-.8-1.8-1.2-2.8-1.2-1.1 0-2.1.4-2.8 1.2l-122 122.9-44.4-44.4c-.8-.8-1.8-1.2-2.8-1.2-1 0-2 .4-2.8 1.2l-17.8 17.8c-1.6 1.6-1.6 4.1 0 5.7l56 56c3.6 3.6 8 5.7 11.7 5.7 5.3 0 9.9-3.9 11.6-5.5h.1l133.7-134.4c1.4-1.7 1.4-4.2-.1-5.7z"></path></svg>
                      <h4>Tiết kiệm thời gian</h4>
                    </li>
                  </ul>
                  <p class="text-align-justify">Không thể phủ nhận rằng quá trình học trực tuyến không phụ thuộc vào cơ sở hạ tầng cũng như vị trí địa lý một cách quá nghiêm ngặt. Vì vây nó tiết kiệm rất nhiều thời gian khi di chuyển. Tất nhiên sau đó, chỉ với thiết bị công nghệ: điện thoại, máy tính, bạn đã có thể tham gia lớp học vô cùng bổ ích rồi – phải không nào?</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                  <ul class="intro-list">
                    <li>
                      <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="icon" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M362.6 192.9L345 174.8c-.7-.8-1.8-1.2-2.8-1.2-1.1 0-2.1.4-2.8 1.2l-122 122.9-44.4-44.4c-.8-.8-1.8-1.2-2.8-1.2-1 0-2 .4-2.8 1.2l-17.8 17.8c-1.6 1.6-1.6 4.1 0 5.7l56 56c3.6 3.6 8 5.7 11.7 5.7 5.3 0 9.9-3.9 11.6-5.5h.1l133.7-134.4c1.4-1.7 1.4-4.2-.1-5.7z"></path></svg>
                      <h4>Hiệu quả</h4>
                    </li>
                  </ul>
                  <p class="text-align-justify">Học trực tuyến giúp học viên nâng cao được tính hiệu quả thông qua quá trình tương tác thương xuyên với giáo viên. Đến với INTO các bạn được học theo phương pháp học mới, phải luôn luôn thường xuyên tương tác với giáo viên thông qua các bài tập, đoạn hội thoại.</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                  <ul class="intro-list">
                    <li>
                      <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="icon" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M362.6 192.9L345 174.8c-.7-.8-1.8-1.2-2.8-1.2-1.1 0-2.1.4-2.8 1.2l-122 122.9-44.4-44.4c-.8-.8-1.8-1.2-2.8-1.2-1 0-2 .4-2.8 1.2l-17.8 17.8c-1.6 1.6-1.6 4.1 0 5.7l56 56c3.6 3.6 8 5.7 11.7 5.7 5.3 0 9.9-3.9 11.6-5.5h.1l133.7-134.4c1.4-1.7 1.4-4.2-.1-5.7z"></path></svg>
                      <h4>Tiết kiệm kinh phí</h4>
                    </li>
                  </ul>
                  <p class="text-align-justify">Tiết kiệm hơn là những đặc tính mà công nghệ thông tin trong thế giới “ phẳng” đem lại cho con người và INTO đã tận dụng được triệt để đặc tính này để đưa ra các khóa học trưc tuyến phù hợp cho tất cả mọi người.
                  Mặc dù học phí rẻ hơn nhưng tất cả những giảng viên của INTO đều là chuyên gia có kinh nghiệm, có sự tân tâm, nhiệt huyết trong giảng dạy Anh Ngữ.</p>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title" data-aos="fade-in" data-aos-delay="100">
          <h2>Courses</h2>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up">
              <img alt="" class="lazy image-banner loaded" width="100%" src="https://api.edutalk.edu.vn/assets/media/untitled-2-09.png" sizes="100w">
              <h4 class="title"><a href="">Khóa IELTS 3-4.5 
              </a></h4>
              <p class="description">20h-22h tối t7 hàng tuần
              </p>
              <a class="btn btn-primary" href="#">Xem chi tiết</a>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <img alt="" class="lazy image-banner loaded" width="100%" src="https://api.edutalk.edu.vn/assets/media/untitled-2-09.png" sizes="100w">
              <h4 class="title"><a href="">TOEIC 405-600</a></h4>
              <p class="description">20h-22h tối t5 hàng tuần</p>
              <a class="btn btn-primary" href="#">Xem chi tiết</a>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <img alt="" class="lazy image-banner loaded" width="100%" src="https://api.edutalk.edu.vn/assets/media/untitled-2-09.png" sizes="100w">
              <h4 class="title"><a href="">Khóa IETLS 5-6.5</a></h4>
              <p class="description">17-19 tối t5 hàng tuần</p>
              <a class="btn btn-primary" href="#">Xem chi tiết</a>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <img alt="" class="lazy image-banner loaded" width="100%" src="https://api.edutalk.edu.vn/assets/media/untitled-2-09.png" sizes="100w">
              <h4 class="title"><a href="">TOEFL IBT 60-78</a></h4>
              <p class="description">19-21 tối t4 hàng tuần</p>
              <a class="btn btn-primary" href="#">Xem chi tiết</a>
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
              <p><strong>Satisfied students</strong></p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="icofont-teacher"></i>
              <span data-toggle="counter-up">15</span>
              <p><strong>Prestigious lecturers</strong></p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="icofont-live-support"></i>
              <span data-toggle="counter-up">1,463</span>
              <p><strong>Hours Of Support</strong></p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="icofont-users-alt-5"></i>
              <span data-toggle="counter-up">1,300</span>
              <p><strong>students attended</strong></p>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="text-center">
          <h3>Call To Action</h3>
          <p>If you are not willing to learn, no one can help you. If you determined to learn, no one can stop you. The limits of my language mean the limits of my world.</p>
          <a class="cta-btn" href="#">Call To Action</a>
        </div>

      </div>
    </section><!-- End Cta Section -->


    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-in" data-aos-delay="100">
          <h2>Testimonials</h2>
          <p>What do students evaluate after studying at INTO</p>
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

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container">

        <div class="section-title" data-aos="fade-in" data-aos-delay="100">
          <h2>Lecturers</h2>
          <p>INTO's quality teaching staff</p>
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
