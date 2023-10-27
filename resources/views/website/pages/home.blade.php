@extends('website.layouts.layout')

@section('content')

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex justify-cntent-center align-items-center">
        <div id="heroCarousel" data-bs-interval="5000" class="container carousel carousel-fade" data-bs-ride="carousel">

            <!-- Slide 1 -->
            @foreach ($sliders as $key=>$slider)
            <div class="carousel-item {{ $key==0 ? 'active' : ''  }}">
                <div class="carousel-container">
                    <h2 class="animate__animated animate__fadeInDown">{{$slider->name}}</h2>
                    <h3 class="animate__animated animate__fadeInDown" style="color:white">{{$slider->title}}</h3>
                    <p class="animate__animated animate__fadeInUp">{{$slider->description}}</p>
                        <a href="{{route('register.index')}}" class="btn-get-started animate__animated animate__fadeInUp scrollto">Register Now</a>
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
                <a class="cta-btn align-middle px-sm-5 " href="{{route('register.index')}}">Enrol on a Course today</a>
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

            {{-- <div class="row">
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bxl-dribbble"></i></div>
                        <h4 class="title"><a href="">SIA Linked Qualifications</a></h4>
                        <p class="description">As of April 1, Door Supervision course is a 6 day course instead of a 4 day course. Moreover, you must have a First Aid Qualification before you can take the training. This should be an Emergency First Aid at Work (EFAW) certificate or higher.</p>
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

            </div> --}}

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
    <div class="swiper-slide"><img src="{{asset('assets/img/clients/client-1.png')}}" class="img-fluid" alt="/lnvndfvnfdvnlsdvfnlsnvl\/sdknv/ lorem25"></div>
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
    </section>
    <!-- End Why Us Section -->
@endsection
