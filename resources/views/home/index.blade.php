@extends('layouts.customers.app')

@section('title')
Into
@endsection
<!-- ======= Hero Section ======= -->
@section('content')
<section id="hero">
  <div class="hero-container" data-aos="fade-up">
    <h1>Welcome to Into</h1>
    <h2 style="font-size: 30px;">Chinh phục IELTS 6.5+ với hệ thống giáo dục trực tuyến tại INTO</h2>
    <a href="#about" class="btn-get-started scrollto"><i class="bx bx-chevrons-down"></i></a>
  </div>
</section> 
<!-- End Hero -->
<main id="main">
  <!-- ======= About us ======= -->
  <section id="about" class="about">
    <div class="container">
      <div class="row no-gutters">
        <div class="content col-xl-5 d-flex align-items-stretch" data-aos="fade-up">
          <div class="content">
            <h3>VỀ CHÚNG TÔI</h3>
            <img src="{{ asset('assets/img/about-us.jpg') }}" class="about-img img-fluid" alt="">
            <p class="icon-box">
              INTO IELTS tập trung đào tạo IELTS với tôn chỉ phát triển về chất lượng thay vì số lượng. INTO tự hào mang đến những khóa học IELTS online hiệu quả với chất lượng giảng dạy hàng đầu.
            </p>
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
          </div>
        </div>
      </div>

    </div>
  </section>
<!-- End About Section -->

<!-- ======= course ======= -->
  <section id="services" class="ftco-section">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <div class="section-title" data-aos="fade-in" data-aos-delay="100">
            <h2>CÁC KHÓA HỌC</h2>
            <p>Các khoá học được thiết kế bởi chính đội ngũ chuyên gia IELTS tại INTO, lấy học viên làm trung tâm, được cá nhân hóa, cập nhật thường xuyên để phản ánh những thay đổi trong kỳ thi IELTS.</p>
          </div>
        </div>
        <div class="col-md-12">
          <div class="featured-carousel owl-carousel">
            @foreach ($review_course as $item)
                <div class="item card" data-aos="fade-up" data-aos-delay="100">
                  <div class="work">
                  <img  style="height: 250px" src="{{ asset("/uploads/courses/$item->image") }}">
                    <div class="card-body" style=" display: flex; flex-direction: column;align-items: center; justify-content: space-between;">
                      <h5 class="card-title" style="font-weight: bold;">{{ $item->course_name }} </h5>
                      <h6 class="card-subtitle mb-1 text-muted">Đầu vào: {{ $item->input }} </h6>
                      <h6 class="card-subtitle mb-1 text-muted">Đầu ra: {{ $item->output }}+</h6>
                      <a href="{{ url("/review_course/$item->id") }}" class="btn btn-primary" style="background-color: #5AB9EA">Xem chi tiết</a>
                    </div>
                  </div>
                </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </section>
  
<!-- End Course -->

  <!-- ======= Counts Section ======= -->

  <section id="counts" class="counts  section-bg">
    <div class="container">
      <div class="row no-gutters">
        <div class="col-lg-4 col-md-6 d-md-flex align-items-md-stretch">
          <div class="count-box">
            <i class="icofont-teacher"></i>
            <span data-toggle="counter-up">{{ $count_teachers }}</span>
            <p><strong>Giáo viên bản ngữ</strong></p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 d-md-flex align-items-md-stretch">
          <div class="count-box">
            <i class="icofont-users-alt-5"></i>
            <span data-toggle="counter-up">{{ $count_students}}</span>
            <p><strong>Học viên đã tham gia</strong></p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 d-md-flex align-items-md-stretch">
          <div class="count-box">
            <i class="icofont-simple-smile"></i>
            <span data-toggle="counter-up">{{ $count_courses }}</span>
            <p><strong>Khóa học tại INTO</strong></p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Counts Section -->

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
  </section>
  <!-- End Cta Section -->

  <!-- ======= Feedbacks Section ======= -->
  <section id="testimonials" class="testimonials section-bg">
    <div class="container">
      <div class="section-title" data-aos="fade-in" data-aos-delay="100">
        <h2>Học viên nói gì về INTO ?</h2>
      </div>
      <div class="owl-carousel testimonials-carousel">
        @foreach($students as $student)
        <div class="testimonial-item" data-aos="fade-up">
          <p>
            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
            {{$student->feedback}}
            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
          </p>
          <img src="{{ asset("/uploads/avatars/$student->avatar") }}" class="testimonial-img" alt="">
          <h3>{{$student->first_name." ".$student->last_name}}</h3>
          <h4>{{$student->accomplishment }}</h4>
        </div>
        @endforeach
      </div>
    </div>
  </section>
  <!-- End Testimonials Section -->

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
          @foreach($teachers as $teacher)
            <div class="item member" data-aos="fade-up" data-aos-delay="100">
              <div class="work">
                <div class="pic"><img src="{{ asset("/uploads/avatars/$teacher->avatar") }}" class="img-fluid" alt=""></div>
                <div class="member-info">
                  <h4>{{ $teacher->first_name." ".$teacher->last_name }}</h4>
                  <span>{{ $teacher->accomplishment }}</span>
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
                </div>
              </div>
            </div>
          @endforeach
          </div>
        </div>
      </div>
    </div>
  </section>

<!-- End Teacher Section -->

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
            <p>intoieltsonline@gmail.com</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="info-box  mb-4">
            <i class="bx bx-phone-call"></i>
            <h3>Call Us</h3>
            <p>+84858712522</p>
          </div>
        </div>
      </div>
      <div class="row" data-aos="fade-up" data-aos-delay="200">
        <div class="col-lg-12 ">
          <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.499196683438!2d105.848478367625!3d21.01270284160628!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab8bc402bd27%3A0x125318f068f125c9!2zVHJ1bmcgdMOibSBUaMawxqFuZyBt4bqhaSB2w6AgVsSDbiBwaMOybmcgVsOibiBI4buTLCA1MSBQaOG7kSBMw6ogxJDhuqFpIEjDoG5oLCBMw6ogxJDhuqFpIEjDoG5oLCBIYWkgQsOgIFRyxrBuZywgSMOgIE7hu5lpLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1620641734188!5m2!1svi!2s" width="100%" height="384" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
      </div>
    </div>
  </section>
  <!-- End Contact Section -->
</main>
<!-- End #main -->


@endsection