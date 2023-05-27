@extends('website.layouts.layout')

@section('content')
<section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">
        {{-- <div class="carousel-inner mt-5" role="listbox" >
          <img class="mt-4" src="{{asset('website\assets\img\security-guard3.jpg')}}" width="100%" class="img-responsive">
        </div> --}}
     </div>
    </div>
</section>
<!-- ======= Book A Table Section ======= -->
<section id="book-a-table" class="book-a-table">
    <div class="container">

      <div class="section-title">
        <h2>Book a <span>Table</span></h2>
        <h1>Register in Course </h1>
      </div>

      <form action="{{route('register.store')}}" method="post" role="form" class="form-css">
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
                <input type="text" class="form-control" name="sure_name"
                    placeholder="Your Sure Name" required>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-6 form-group">
                <input type="phone" name="phone_number" class="form-control"
                    placeholder="Your Phone number" required>
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
        <div class="row">
            <div class="col-md-6 form-group mt-3">
                <input type="text" class="form-control" name="city"
                placeholder="City" required>
            </div>
            @error('phone')
            <span class="text text-danger"> {{$message}}</span>
            @enderror

            <div class="col-md-6 form-group mt-3">
                <select name="gender" class="form-control">
                    <option>Select Gender</option>
                    <option value="male">Male</option>
                    <option value="female" >Female</option>
                    <option value="other">Other</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 form-group mt-3">
                <select name="course" id="" class="form-control">
                    <option>Select Course</option>
                    <option value="course one">one</option>
                    <option value="course two">two</option>
                    <option value=""></option>
                    <option value=""></option>
                </select>
            </div>
                <div class="col-md-6 form-group mt-3">
                    <input type="text" class="form-control" name="address"
                    placeholder="Completer Address" required>
                </div>

        </div>

        <div class="text-center mt-4"><button type="submit" class="btn btn-primary">Send Message</button></div>
    </form>

    </div>
  </section><!-- End Book A Table Section -->
@endsection
