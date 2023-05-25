@extends('website.layouts.layout')

@section('content')

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex justify-cntent-center align-items-center">
        <div id="heroCarousel" data-bs-interval="5000" class="container carousel carousel-fade" data-bs-ride="carousel">

            <!-- Slide 1 -->
            @foreach ($sliders as $slider)
            <div class="carousel-item active">
                <div class="carousel-container">
                    <h2 class="animate__animated animate__fadeInDown">{{$slider->name}}</h2>
                    <p class="animate__animated animate__fadeInUp">{{$slider->description}}</p>
                        <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Register Now</a>
                </div>
            </div>
            @endforeach

            <!-- Slide 2 -->
            {{-- <div class="carousel-item">
                <div class="carousel-container">
                    <h2 class="animate__animated animate__fadeInDown">Lorem Ipsum Dolor</h2>
                    <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid.
                        Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut.
                        Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore
                        modi architecto.</p>
                    <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
                </div>
            </div> --}}

            <!-- Slide 3 -->
            {{-- <div class="carousel-item">
                <div class="carousel-container">
                    <h2 class="animate__animated animate__fadeInDown">Sequi ea ut et est quaerat</h2>
                    <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid.
                        Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut.
                        Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore
                        modi architecto.</p>
                    <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
                </div>
            </div> --}}

            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
            </a>

        </div>
    </section>
    <!-- End Hero -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
        <div class="container">

            <div class="row" data-aos="zoom-in">
                 <div class="row col-lg-12 text-lg-start mt-lg-5" data-aos="zoom-in">

                <h3 Class="text-center">OFFERING 25% DISCOUNT ON TOP - UP</h3>
                <p Class="text-center"> Noble Guards Ltd offers courses with interactive features. Our trainers ensure that candidates are given up to date knowledge on what is currently going in the industry. You can either choose from some of our more popular courses or register your interest for the various other courses that Noble Guards Ltd offers.</p>
        </div>
        <div class="row" data-aos="zoom-in">
          <button type="button" class=" btn btn-lg  ">
                <!-- <p>Enrol on a course today</p> -->
                <a class="cta-btn align-middle px-sm-5 " href="#">Enrol on a Course today</a>
                {{-- <a class="cta-btn align-middle px-sm-5 " href="#">Register in a Course today</a> --}}
          </button>
        </div>
            </div>

        </div>
    </section>
    {{-- home section start --}}

    <!-- ======= Icon Boxes Section ======= -->
    <section id="icon-boxes" class="icon-boxes">
        <div class="container">

            <div class="row">
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bxl-dribbble"></i></div>
                        <h4 class="title"><a href="">SIA Linked Qualifications</a></h4>
                        <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias
                            excepturi sint occaecati cupiditate non provident</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up"
                    data-aos-delay="100">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-file"></i></div>
                        <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
                        <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                            dolore eu fugiat nulla pariatur</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up"
                    data-aos-delay="200">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-tachometer"></i></div>
                        <h4 class="title"><a href="">Magni Dolores</a></h4>
                        <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                            officia deserunt mollit anim id est laborum</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up"
                    data-aos-delay="300">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-layer"></i></div>
                        <h4 class="title"><a href="">Nemo Enim</a></h4>
                        <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui
                            blanditiis praesentium voluptatum deleniti atque</p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Icon Boxes Section -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>About Us</h2>
                @isset($about)
                <p>{{$about->title}}</p>
                  @endisset
            </div>

            <div class="row content">
                <div class="col-lg-12">
                    @isset($about)
                    <p>{{$about->description}}</p>
                    @endisset
                    {{-- <ul>
      <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
      <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit</li>
      <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
    </ul> --}}
                    <div class="section-title">
                        @isset($about)
                        <a href="{{route('aboutus.detail')}}" class="btn-learn-more">Learn More</a>
                        @endisset
                    </div>
                </div>
                {{-- <div class="col-lg-6 pt-4 pt-lg-0">
    <p>
      Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
      velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
      culpa qui officia deserunt mollit anim id est laborum.
    </p>
  </div> --}}
            </div>

        </div>
    </section>
    <!-- End About Us Section -->

    <!-- ======= Clients Section ======= -->
    {{-- <section id="clients" class="clients">
<div class="container" data-aos="zoom-in">

<div class="clients-slider swiper">
  <div class="swiper-wrapper align-items-center">
    <div class="swiper-slide"><img src="{{asset('assets/img/clients/client-1.png')}}" class="img-fluid" alt=""></div>
    <div class="swiper-slide"><img src="{{asset('assets/img/clients/client-2.png')}}" class="img-fluid" alt=""></div>
    <div class="swiper-slide"><img src="{{asset('assets/img/clients/client-3.png')}}" class="img-fluid" alt=""></div>
    <div class="swiper-slide"><img src="{{asset('assets/img/clients/client-4.png')}}" class="img-fluid" alt=""></div>
    <div class="swiper-slide"><img src="{{asset('assets/img/clients/client-5.png')}}" class="img-fluid" alt=""></div>
    <div class="swiper-slide"><img src="{{asset('assets/img/clients/client-6.png')}}" class="img-fluid" alt=""></div>
    <div class="swiper-slide"><img src="{{asset('assets/img/clients/client-7.png')}}" class="img-fluid" alt=""></div>
    <div class="swiper-slide"><img src="{{asset('assets/img/clients/client-8.png')}}" class="img-fluid" alt=""></div>
  </div>
  <div class="swiper-pagination"></div>
</div>

</div>
</section> --}}
    <!-- End Clients Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
        <div class="container-fluid">

            <div class="row">

                <div class="col-lg-5 align-items-stretch position-relative video-box"
                    style='background-image: url("{{ asset('assets/img/why-us.jpg') }}')}}");' data-aos="fade-right">
                    {{-- <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox play-btn mb-4"></a> --}}
                    <img src="{{ asset('website/assets/img/refer-friend.jpg') }}" alt="" width="100%"
                        height="100%">
                </div>

                <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch" data-aos="fade-left">

                    <div class="content">
                        <h3><strong>Refer a Friend</strong></h3>
                        <p>
                            We provide the best training that focuses on real-world skills to help and give you the
                            qualifications needed to get you back into work and go for new opportunities.
                        </p>
                    </div>

                    <div class="accordion-list">
                        <ul>
                            <a href="{{route('refer')}}" class="btn btn-primary">Refer a Friend</a>
                        </ul>
                    </div>

                </div>

            </div>

        </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Services Section ======= -->
    {{-- <section id="services" class="services">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Services</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit
                    sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias
                    ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>

            <div class="row">
                <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon-box">
                        <i class="bi bi-card-checklist"></i>
                        <h4><a href="#">Lorem Ipsum</a></h4>
                        <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint
                            occaecati cupiditate non provident</p>
                    </div>
                </div>
                <div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
                    <div class="icon-box">
                        <i class="bi bi-bar-chart"></i>
                        <h4><a href="#">Dolor Sitema</a></h4>
                        <p>Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat tarad limino ata</p>
                    </div>
                </div>
                <div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="300">
                    <div class="icon-box">
                        <i class="bi bi-binoculars"></i>
                        <h4><a href="#">Sed ut perspiciatis</a></h4>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                            nulla pariatur</p>
                    </div>
                </div>
                <div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="400">
                    <div class="icon-box">
                        <i class="bi bi-brightness-high"></i>
                        <h4><a href="#">Nemo Enim</a></h4>
                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                            anim id est laborum</p>
                    </div>
                </div>
                <div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="500">
                    <div class="icon-box">
                        <i class="bi bi-calendar4-week"></i>
                        <h4><a href="#">Magni Dolore</a></h4>
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                            voluptatum deleniti atque</p>
                    </div>
                </div>
                <div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="600">
                    <div class="icon-box">
                        <i class="bi bi-briefcase"></i>
                        <h4><a href="#">Eiusmod Tempor</a></h4>
                        <p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta
                            nobis est eligendi</p>
                    </div>
                </div>
            </div>

        </div>
    </section> --}}
    <!-- End Services Section -->



    <!-- ======= Portfoio Section ======= -->
    {{-- <section id="portfolio" class="portfoio">
<div class="container" data-aos="fade-up">

<div class="section-title">
  <h2>Portfoio</h2>
  <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
</div>

<div class="row">
  <div class="col-lg-12 d-flex justify-content-center">
    <ul id="portfolio-flters">
      <li data-filter="*" class="filter-active">All</li>
      <li data-filter=".filter-app">App</li>
      <li data-filter=".filter-card">Card</li>
      <li data-filter=".filter-web">Web</li>
    </ul>
  </div>
</div>

<div class="row portfolio-container">

  <div class="col-lg-4 col-md-6 portfolio-item filter-app">
    <img src="{{asset('assets/img/portfolio/portfolio-1.jpg')}}" class="img-fluid" alt="">
    <div class="portfolio-info">
      <h4>App 1</h4>
      <p>App</p>
      <a href="{{asset('assets/img/portfolio/portfolio-1.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
      <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
    </div>
  </div>

  <div class="col-lg-4 col-md-6 portfolio-item filter-web">
    <img src="{{asset('assets/img/portfolio/portfolio-2.jpg')}}" class="img-fluid" alt="">
    <div class="portfolio-info">
      <h4>Web 3</h4>
      <p>Web</p>
      <a href="{{asset('assets/img/portfolio/portfolio-2.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
      <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
    </div>
  </div>

  <div class="col-lg-4 col-md-6 portfolio-item filter-app">
    <img src="{{asset('assets/img/portfolio/portfolio-3.jpg')}}" class="img-fluid" alt="">
    <div class="portfolio-info">
      <h4>App 2</h4>
      <p>App</p>
      <a href="{{asset('assets/img/portfolio/portfolio-3.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
      <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
    </div>
  </div>

  <div class="col-lg-4 col-md-6 portfolio-item filter-card">
    <img src="{{asset('assets/img/portfolio/portfolio-4.jpg')}}" class="img-fluid" alt="">
    <div class="portfolio-info">
      <h4>Card 2</h4>
      <p>Card</p>
      <a href="{{asset('assets/img/portfolio/portfolio-4.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
      <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
    </div>
  </div>

  <div class="col-lg-4 col-md-6 portfolio-item filter-web">
    <img src="{{asset('assets/img/portfolio/portfolio-5.jpg')}}" class="img-fluid" alt="">
    <div class="portfolio-info">
      <h4>Web 2</h4>
      <p>Web</p>
      <a href="{{asset('assets/img/portfolio/portfolio-5.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
      <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
    </div>
  </div>

  <div class="col-lg-4 col-md-6 portfolio-item filter-app">
    <img src="{{asset('assets/img/portfolio/portfolio-6.jpg')}}" class="img-fluid" alt="">
    <div class="portfolio-info">
      <h4>App 3</h4>
      <p>App</p>
      <a href="{{asset('assets/img/portfolio/portfolio-6.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
      <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
    </div>
  </div>

  <div class="col-lg-4 col-md-6 portfolio-item filter-card">
    <img src="{{asset('assets/img/portfolio/portfolio-7.jpg')}}" class="img-fluid" alt="">
    <div class="portfolio-info">
      <h4>Card 1</h4>
      <p>Card</p>
      <a href="{{asset('assets/img/portfolio/portfolio-7.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 1"><i class="bx bx-plus"></i></a>
      <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
    </div>
  </div>

  <div class="col-lg-4 col-md-6 portfolio-item filter-card">
    <img src="{{asset('assets/img/portfolio/portfolio-8.jpg')}}" class="img-fluid" alt="">
    <div class="portfolio-info">
      <h4>Card 3</h4>
      <p>Card</p>
      <a href="{{asset('assets/img/portfolio/portfolio-8.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 3"><i class="bx bx-plus"></i></a>
      <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
    </div>
  </div>

  <div class="col-lg-4 col-md-6 portfolio-item filter-web">
    <img src="{{asset('assets/img/portfolio/portfolio-9.jpg')}}" class="img-fluid" alt="">
    <div class="portfolio-info">
      <h4>Web 3</h4>
      <p>Web</p>
      <a href="{{asset('assets/img/portfolio/portfolio-9.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
      <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
    </div>
  </div>

</div>

</div>
</section> --}}
    <!-- End Portfoio Section -->

    <!-- ======= Team Section ======= -->
    {{-- <section id="team" class="team section-bg">
<div class="container" data-aos="fade-up">

<div class="section-title">
  <h2>Team</h2>
  <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
</div>

<div class="row">

  <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
    <div class="member d-flex align-items-start">
      <div class="pic"><img src="{{asset('assets/img/team/team-1.jpg')}}" class="img-fluid" alt=""></div>
      <div class="member-info">
        <h4>Walter White</h4>
        <span>Chief Executive Officer</span>
        <p>Explicabo voluptatem mollitia et repellat qui dolorum quasi</p>
        <div class="social">
          <a href=""><i class="ri-twitter-fill"></i></a>
          <a href=""><i class="ri-facebook-fill"></i></a>
          <a href=""><i class="ri-instagram-fill"></i></a>
          <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
        </div>
      </div>
    </div>
  </div>

  <div class="col-lg-6 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
    <div class="member d-flex align-items-start">
      <div class="pic"><img src="{{asset('assets/img/team/team-2.jpg')}}" class="img-fluid" alt=""></div>
      <div class="member-info">
        <h4>Sarah Jhonson</h4>
        <span>Product Manager</span>
        <p>Aut maiores voluptates amet et quis praesentium qui senda para</p>
        <div class="social">
          <a href=""><i class="ri-twitter-fill"></i></a>
          <a href=""><i class="ri-facebook-fill"></i></a>
          <a href=""><i class="ri-instagram-fill"></i></a>
          <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
        </div>
      </div>
    </div>
  </div>

  <div class="col-lg-6 mt-4" data-aos="fade-up" data-aos-delay="300">
    <div class="member d-flex align-items-start">
      <div class="pic"><img src="{{asset('assets/img/team/team-3.jpg')}}" class="img-fluid" alt=""></div>
      <div class="member-info">
        <h4>William Anderson</h4>
        <span>CTO</span>
        <p>Quisquam facilis cum velit laborum corrupti fuga rerum quia</p>
        <div class="social">
          <a href=""><i class="ri-twitter-fill"></i></a>
          <a href=""><i class="ri-facebook-fill"></i></a>
          <a href=""><i class="ri-instagram-fill"></i></a>
          <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
        </div>
      </div>
    </div>
  </div>

  <div class="col-lg-6 mt-4" data-aos="fade-up" data-aos-delay="400">
    <div class="member d-flex align-items-start">
      <div class="pic"><img src="{{asset('assets/img/team/team-4.jpg')}}" class="img-fluid" alt=""></div>
      <div class="member-info">
        <h4>Amanda Jepson</h4>
        <span>Accountant</span>
        <p>Dolorum tempora officiis odit laborum officiis et et accusamus</p>
        <div class="social">
          <a href=""><i class="ri-twitter-fill"></i></a>
          <a href=""><i class="ri-facebook-fill"></i></a>
          <a href=""><i class="ri-instagram-fill"></i></a>
          <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
        </div>
      </div>
    </div>
  </div>

</div>

</div>
</section> --}}
    <!-- End Team Section -->



    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Frequently Asked Questions</h2>
            </div>

            <div class="faq-list">
                <ul>
                    @foreach ($faqs as $faq)
                    <li data-aos="fade-up" data-aos="fade-up" data-aos-delay="100">
                        <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse"
                        data-bs-target="#faq-list-1">{{$faq->title}}? <i
                        class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                            <p>
                                {{$faq->description}}
                            </p>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>

        </div>
    </section><!-- End Frequently Asked Questions Section -->



    {{-- home section end --}}
@endsection
