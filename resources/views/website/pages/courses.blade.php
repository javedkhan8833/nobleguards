@extends('website.layouts.layout')
@section('content')

<!-- ======= Cta Section ======= -->
<section id="cta" class="cta">
    <div class="container">

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
</section>
 <!-- ======= Pricing Section ======= -->
 <section id="pricing" class="pricing">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>In-Demand Courses</h2>
        {{-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> --}}
      </div>

      <div class="row">
        @foreach ($data as  $value)
        <div class="box-item">
          <div class="flip-box">
            <div class="flip-box-front text-center" style="background-image: url('https://s25.postimg.cc/hj4c4qnov/cta-3.png');">
              <div class="inner color-white">
                <h3 class="flip-box-header">{{ $value->name }}</h3>
                  <p>{{ $value->title }}</p>
                  <p>{{ $value->sub_title }}</p>
                  <img src="https://s25.postimg.cc/65hsttv9b/cta-arrow.png" alt="" class="flip-box-img">
            </div>
              </div>
                <div class="flip-box-back text-center" style="background-image: url('https://s25.postimg.cc/hj4c4qnov/cta-3.png');">
                  <div class="inner color-white">
                    <h3 class="flip-box-header">Price: &pound;{{$value->price }}</h3>
                      <p>Course Duration:{{$value->duration }}</p>

                      <label for="">Upcoming Dates</label>
                      <ol type="1">
                        @foreach ($value->dates as $expectedDate)
                            @if ($expectedDate->is_confirmed == 0)
                            <li>Date is Not Confirmed Yet</li>
                            @else
                            <li>{{$expectedDate->upcoming_date }}</li>
                            @endif
                        @endforeach
                      </ol>
                      <a href="{{route('register.index')}}" class="flip-box-button">
                      Register Interest
                    </a>
                  </div>
                </div>
          </div>
        </div>
        @endforeach

        {{-- <div class="box-item">
          <div class="flip-box">
            <div class="flip-box-front text-center" style="background-image: url('https://s25.postimg.cc/hj4c4qnov/cta-3.png');">
              <div class="inner color-white">
                <h3 class="flip-box-header">Never Sleeps</h3>
                  <p>A short sentence describing this callout is.</p>
                    <img src="https://s25.postimg.cc/65hsttv9b/cta-arrow.png" alt="" class="flip-box-img">
            </div>
              </div>
                <div class="flip-box-back text-center" style="background-image: url('https://s25.postimg.cc/hj4c4qnov/cta-3.png');">
                  <div class="inner color-white">
                    <h3 class="flip-box-header">Never Sleeps</h3>
                      <p>A short sentence describing this callout is.</p>
                      <button class="flip-box-button">Learn More</button>
                  </div>
                </div>
          </div>
        </div>

        <div class="box-item">
          <div class="flip-box">
            <div class="flip-box-front text-center" style="background-image: url('https://s25.postimg.cc/hj4c4qnov/cta-3.png');">
              <div class="inner color-white">
                <h3 class="flip-box-header">Never Sleeps</h3>
                  <p>A short sentence describing this callout is.</p>
                    <img src="https://s25.postimg.cc/65hsttv9b/cta-arrow.png" alt="" class="flip-box-img">
            </div>
              </div>
                <div class="flip-box-back text-center" style="background-image: url('https://s25.postimg.cc/hj4c4qnov/cta-3.png');">
                  <div class="inner color-white">
                    <h3 class="flip-box-header">Never Sleeps</h3>
                      <p>A short sentence describing this callout is.</p>
                      <button class="flip-box-button">Learn More</button>
                  </div>
                </div>
          </div>
        </div> --}}
      </div>

    </div>
  </section>
  <!-- End Pricing Section -->


@endsection
