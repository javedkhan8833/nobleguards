@extends('website.layouts.layout')
@section('content')
{{-- <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner" role="listbox">
            <img src="{{asset('website/img/slide/slide-1.jpg')}}" alt="">
        </div>
     </div>
    </div>
</section> --}}
<section id="cta" class="cta">
    <div class="container">

        <div class="row" data-aos="zoom-in">
            <div class="col-lg-12 text-center text-lg-start">
                {{-- <h3>New SIA Course Updates (April 2021)</h3>
                <p> As of April 1, Door Supervision course is a 6 day course instead of a 4 day course. Moreover,
                    you must have a First Aid Qualification before you can take the training. This should be an
                    Emergency First Aid at Work (EFAW) certificate or higher.</p> --}}
                    <h1 align="center" class="mt-5" style="color:white">Welcome to Noble Guards</h1>
                </div>
            {{-- <div class="col-lg-3 cta-btn-container text-center">
                <p>Enrol on a course today</p>
                <a class="cta-btn align-middle" href="#">Courses</a>
            </div> --}}
        </div>

    </div>
</section>
{{-- <section id="cta" class="cta">
    <div class="container">

        <div class="row" data-aos="zoom-in">

            <div class="section-title">
                <h2>Contact Us</h2>
            </div>
        </div>

    </div>
</section> --}}

<section id="about" class="about">
    <div class="container" data-aos="fade-up">

      {{-- <div class="section-title">
        <h2>Welcome to Noble Guards</h2>
        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
      </div> --}}

      <div class="row content">
        <div class="col-lg-6">
          <p>
            Click on Register if you are not register with us!
          </p>
          <ul>
                <a href="#" class="btn-learn-more">Register Now</a>
          </ul>
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0">
          <p>
            Click on Login if you are already registered with us
          </p>
          <a href="#" class="btn-learn-more">Login Now</a>
        </div>
      </div>

    </div>
  </section>
@endsection
