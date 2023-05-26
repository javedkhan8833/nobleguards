@extends('website.layouts.layout')
@section('content')
<section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner mt-5" role="listbox" >
          <img class="mt-4" src="{{asset('website\assets\img\security-guard3.jpg')}}" alt="" width="100%">
        </div>
     </div>
    </div>
</section>
<!-- <section id="cta" class="cta">
    <div class="container">

        {{-- <div class="row" data-aos="zoom-in">

            <div class="section-title">
                <h2>Co</h2>
            </div>
        </div> --}}

    </div> -->
</section>
<section id="about" class="about">
    <div class="container" data-aos="fade-up">

      <div class="section-title ">
        <h2>About Us</h2>
        @isset($aboutus)
        <p>{{$aboutus->title}}</p>
        @endisset
      </div>

      <div class="row content">
        <div class="col-lg-12">
            @isset($aboutus)
            <p>{{$aboutus->description}}</p>
            @endisset
          {{-- <ul>
            <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
            <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit</li>
            <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
          </ul> --}}
        </div>
        <div class="row m-5">
            <div class="col-md-4">
                <div class="section-title">
                    <h2>OUR AIM</h2>
                    @isset($aboutus)
                    <p>{{$aboutus->aim}}</p>
                    @endisset
                </div>
            </div>
            <div class="col-md-4">
                <div class="section-title bg-#f7d200">
                    <h2>OUR VALUES</h2>
                    @isset($aboutus)
                    <p>{{$aboutus->values}}</p>
                    @endisset
                  </div>
            </div>
            <div class="col-md-4">
                <div class="section-title">
                    <h2>Why Nobel Gaurd</h2>
                    @isset($aboutus)
                    <p>{{$aboutus->why}}</p>
                    @endisset
                  </div>
            </div>
        </div>
      </div>

    </div>
  </section>
@endsection
