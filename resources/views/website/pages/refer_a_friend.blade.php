@extends('website.layouts.layout')

@section('content')
{{-- <!-- ======= Hero Section ======= -->
<section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
        <div class="carousel-inner" role="listbox">
            <img src="{{asset('website/img/slide/slide-1.jpg')}}" alt="">
        </div>
     </div>
    </div>
  </section> --}}

<!-- ======= Cta Section ======= -->
<section id="cta" class="cta">
    <div class="container">

        {{-- <div class="row" data-aos="zoom-in">

            <div class="section-title">
                <h2>Contact Us</h2>
            </div>
        </div> --}}

    </div>
</section>
 <!-- ======= Contact Section ======= -->
 <section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Refer a Friend</h2>
        </div>

        <div class="row mt-1 d-flex justify-content-end" data-aos="fade-right" data-aos-delay="100">

            {{-- <div class="col-lg-5">
                <div class="info">
                    <div class="address">
                        <i class="bi bi-geo-alt"></i>
                        <h4>Location:</h4>
                        <p>A108 Adam Street, New York, NY 535022</p>
                    </div>

                    <div class="email">
                        <i class="bi bi-envelope"></i>
                        <h4>Email:</h4>
                        <p>info@example.com</p>
                    </div>

                    <div class="phone">
                        <i class="bi bi-phone"></i>
                        <h4>Call:</h4>
                        <p>+1 5589 55488 55s</p>
                    </div>

                </div>

            </div> --}}

            <div class="col-lg-12 mt-5 mt-lg-0" data-aos="fade-left" data-aos-delay="100">
                 <form action="{{route('refered')}}" method="post" role="form" class="form-css">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <input type="text" name="name" class="form-control"
                                placeholder="Your Name" required>
                        </div>
                        @error('name')
                        <span class="text text-danger"> {{$message}}</span>
                        @enderror
                        <div class="col-md-6 form-group mt-3 mt-md-0">
                            <input type="email" class="form-control" name="email"
                                placeholder="Your Email" required>
                        </div>
                    </div>
                    @error('email')
                    <span class="text text-danger"> {{$message}}</span>
                    @enderror
                    <div class="form-group mt-3">
                        <input type="text" class="form-control" name="phone"
                            placeholder="Your Phone" required>
                    </div>
                    @error('phone')
                        <span class="text text-danger"> {{$message}}</span>
                    @enderror
                    <div class="row">
                        <div class="col-md-6 form-group mt-3">
                            <input type="text" class="form-control" name="referedName"
                            placeholder="Refered Student Name" required>
                        </div>
                        @error('referedName')
                        <span class="text text-danger"> {{$message}}</span>
                        @enderror
                        <div class="col-md-6 form-group mt-3">
                            <input type="text" class="form-control" name="referedEmail"
                            placeholder="Refered Student Email" required>
                        </div>
                        @error('referedEmail')
                        <span class="text text-danger"> {{$message}}</span>
                        @enderror
                    </div>
                        <div class="form-group mt-3">
                        <input type="text" class="form-control" name="referedPhone"
                            placeholder="Refered Student Phone Number" required>
                    </div>
                    @error('referedPhone')
                        <span class="text text-danger"> {{$message}}</span>
                    @enderror
                    <div class="text-center"><button type="submit">Send Message</button></div>
                </form>

            </div>

        </div>

    </div>
</section>
<!-- End Contact Section -->


@endsection
