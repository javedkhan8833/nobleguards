@extends('website.layouts.layout')

@section('content')
<section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner mt-5" role="listbox" >
          <img class="mt-4" src="{{asset('website\assets\img\register3a.jpeg')}}" alt="" width="100%">
        </div>
     </div>
    </div>
</section>
<!-- ======= Book A Table Section ======= -->
<section id="book-a-table" class="book-a-table">
    <div class="container">
      <div class="row mt-5" data-aos="zoom-in">
          <div class="section-title">
            <h2>Register in Course </h2>
        </div>
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
                    <option value="course one">Door Supervision</option>
                    <option value="course two">Door Supervison Top-Up</option>
                    <option value="">Level 3 Emergency First Aid</option>
                    <option value="Emergency First Aid at Work + Door Supervision">Emergency First Aid at Work + Door Supervision +Combination of EFAW and DS</option>
                    <option value="Security Guard">Security Guard</option>
                    <option value="Emergency First Aid at Work + Security Guard">Emergency First Aid at Work + Security Guard</option>
                    <option value="EFAW + Security Officer">EFAW + Security Officer</option>
                </select>
            </div>
                <div class="col-md-6 form-group mt-3">
                    <input type="text" class="form-control" name="address"
                    placeholder="Completer Address" required>
                </div>

        </div>

        <div class="text-center mt-4"><button type="submit" class="btn btn-light btn-outline-primary">Send Message</button></div>
    </form>

    </div>
  </section><!-- End Book A Table Section -->
@endsection
