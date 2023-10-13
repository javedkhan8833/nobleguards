@extends('website.layouts.layout')
@section('content')
<section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner mt-5" role="listbox" >
          <img class="mt-4" src="{{asset('website\assets\img\faq_banner.jpeg')}}" alt="" width="100%">
        </div>
     </div>
    </div>
</section>

<!-- ======= Frequently Asked Questions Section ======= -->
{{-- <section id="faq" class="faq section-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Frequently Asked Questions</h2>
        </div>

        <div class="faq-list">
            <ul>
                <li data-aos="fade-up" data-aos="fade-up" data-aos-delay="100">
                    @foreach ($faqs as $faq)
                    <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse"
                    data-bs-target="#faq-list-{{$faq->id}}">{{$faq->title}} <i
                    class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                    <div id="faq-list-{{$faq->id}}" class="collapse" data-bs-parent=".faq-list">
                        <p>
                            {{$faq->description}}
                        </p>
                    </div>
                    @endforeach
                </li>
            </ul>
        </div>

    </div>
</section> --}}
<!-- End Frequently Asked Questions Section -->


<main id="main">
    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Frequently Asked Questions</h2>
        </div>
        <div class="faq-list">
          <ul>
            @foreach ($faqs as $faq)
            <li data-aos="fade-up" data-aos-delay="500">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-{{$faq->id}}" class="collapsed">{{$faq->title}}<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-{{$faq->id}}" class="collapse" data-bs-parent=".faq-list">
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

  </main>
@endsection
