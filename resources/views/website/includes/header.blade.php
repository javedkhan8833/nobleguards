<header id="header" class="fixed-top d-flex align-items-center ">
    <div class="container d-flex align-items-center justify-content-between">

      {{-- <h1 class="logo"><a href="index.html">Anyar</a></h1> --}}
      <!-- Uncomment below if you prefer to use an image logo -->
     <a href="{{route('main')}}" class="logo"><img style="width:80px; max-width:initial" src="{{asset('website/assets/img/Logo_nobalguards.jpg')}}" alt="" class="img-fluid"></a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="{{route('main')}}">Home</a></li>
          <li><a class="nav-link scrollto" href="{{route('about')}}">About</a></li>
          {{-- <li><a class="nav-link scrollto" href="{{route('services')}}">Services</a></li> --}}
          {{-- <li><a class="nav-link scrollto " href="#portfolio">Portfolio</a></li> --}}
          {{-- <li><a class="nav-link scrollto" href="#team">Team</a></li> --}}
          <li><a class="nav-link scrollto" href="{{route('courses')}}">Courses</a></li>
          {{-- <li><a href="blog.html">Blog</a></li> --}}
          {{-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li> --}}
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
