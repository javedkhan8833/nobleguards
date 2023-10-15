<header id="header" class="fixed-top d-flex align-items-center ">
    <div class="container d-flex align-items-center justify-content-between">

      {{-- <h1 class="logo"><a href="index.html">Anyar</a></h1> --}}
      <!-- Uncomment below if you prefer to use an image logo -->
     <a href="{{route('main')}}" class="logo"><img style="width:80px; max-width:initial" src="{{asset('website/assets/img/Logo_nobalguards.jpg')}}" alt="" class="img-fluid"></a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="{{route('main')}}">Home</a></li>
          <li><a class="nav-link scrollto" href="{{route('about')}}">About</a></li>
          <li><a class="nav-link scrollto" href="{{route('courses')}}">Courses</a></li>
          <li><a class="nav-link scrollto" href="{{route('faq')}}">FAQs</a>
            <li><a class="nav-link scrollto" href="{{route('contact')}}">Find us</a>
          </li>
          <li>
            <button class="btn btn-rounded reg-btn">
            <a href="{{route('register.index')}}">Register</a>
            </button>
          </li>
          </ul>

        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header>
