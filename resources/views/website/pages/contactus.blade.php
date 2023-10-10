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


 <!-- ==== map section======= -->
  <!-- <section id="cta"> -->
    <div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2478.283896275893!2d-0.41270732422843914!3d51.59968660395839!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48766b625d8a0b53%3A0x71dbafee68db40fd!2sArgyle%20House%2C%2076%20Joel%20St%2C%20Northwood%20HA6%201LL%2C%20UK!5e0!3m2!1sen!2s!4v1685045510659!5m2!1sen!2s"
                 width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
<!-- </section> -->
<!-- ======end map section ======= -->


 <!-- ======= Contact Section ======= -->
 <section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Contact Us</h2>
        </div>

        <div class="row mt-1 d-flex justify-content-end" data-aos="fade-right" data-aos-delay="100">

            <div class="col-lg-5">
                <div class="info">
                    <div class="address">
                        <i class="bi bi-geo-alt"></i>
                        <h4>Location:</h4>
                        <p>Northwood HA6 1LL Argyle House, Joel Street
                            Northwood London
                            HA6 1NW</p>
                    </div>

                    <div class="email">
                        <i class="bi bi-envelope"></i>
                        <h4>Email:</h4>
                        <p> info@nobleguards.co.uk</p>
                    </div>

                    <div class="phone">
                        <i class="bi bi-phone"></i>
                        <h4>Call:</h4>
                        <p>+44 7916 627255</p>
                        <p>+44 7767 818809</p>
                    </div>

                </div>

            </div>

            <div class="col-lg-6 mt-5 mt-lg-0" data-aos="fade-left" data-aos-delay="100">
                {{-- <form action="{{route('findus')}}" method="post">
                    <input type="text" name="name">
                    <input type="submit" value="Find">
                </form> --}}
                 <form action="{{route('findus')}}" method="post" role="form" class="form-css">
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
                            placeholder="phone" required>
                    </div>
                    @error('phone')
                        <span class="text text-danger"> {{$message}}</span>
                    @enderror
                    <div class="form-group mt-3">
                        <input type="text" class="form-control" name="subject"
                            placeholder="Subject" required>
                    </div>
                    @error('subject')
                        <span class="text text-danger"> {{$message}}</span>
                    @enderror
                    <div class="form-group mt-3">
                        <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                    </div>
                    @error('message')
                        <span class="text text-danger"> {{$message}}</span>
                    @enderror
                    {{-- <div class="my-3">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your message has been sent. Thank you!</div>
                    </div> --}}
                    <div class="text-center"><button type="submit">Send Message</button></div>
                </form>

            </div>

        </div>

    </div>
</section>
<!-- End Contact Section -->


@endsection
