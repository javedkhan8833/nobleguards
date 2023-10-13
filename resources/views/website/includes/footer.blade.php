<footer id="footer">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h4>Our Newsletter</h4>
            <p>Stay Connected, Subscribe to Us!</p>
          </div>
          <div class="col-lg-6">
            <form action="{{route('subscribe')}}" method="post" id="subscription-form">
                @csrf
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
            <div id="success-message" style="display: block; font-size:20px;"></div>
            <div class="print-error-msg" style="display:none">
                <span style="color:red; font-size:20px; width:30px"></span>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-top">
      <div class="container">
        <div class="row justify-content-center">

          <div class="col-lg-4 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="{{route('main')}}">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{route('about')}}">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{route('courses')}}">Courses</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{route('faq')}}">FAQs</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{route('contact')}}">Find us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{route('terms')}}">Terms and Conditions</a></li>
              {{-- <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li> --}}
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              Argyle House, Joel Street <br>
              Northwood London<br>
              HA6 1NW <br><br>
              <strong>Phone:</strong> +44 7916 627255<br>
              <strong>Phone:</strong> +44 7767 818809<br>
              <strong>Email:</strong> info@nobleguards.co.uk<br>
            </p>

          </div>

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>About Noble Guards Ltd</h3>
            <p>Noble Guards Ltd is an SIA professional training organization preparing personnel for careers in the security industry. In collaboration with the UK's leading awarding organisations, Noble Guards Ltd provides high quality training for anyone wishing to get an SIA qualification. Our tutors are professionals from the security industry that equip you with the knowledge and skills needed for you to succeed.</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span></span>Nobel Guards Ltd</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/anyar-free-multipurpose-one-page-bootstrap-theme/ -->
        Designed by <a href="https://www.nobleguardsltd.co.uk/">Nobel Guards Ltd</a>
      </div>
    </div>
  </footer>

  <script>
    $(document).ready(function() {
        $('#subscription-form').submit(function(event) {
            event.preventDefault();

            var form = $(this);
            var url = form.attr('action');
            var data = form.serialize();

            $.ajax({
                type: 'POST',
                url: url,
                data: data,
                success: function(response) {
                    // Handle the successful subscription response
                    if($.isEmptyObject(response.error)){
                        $('#success-message').text(response.message);
                        $('#success-message').show();
                }else{
                    printErrorMsg(response.error);
                }
                    // $('#success-message').text(response.message);
                    // $('#success-message').show();
                },
                error: function(xhr, status, error) {
                    // Handle the error response
                    console.error(error);
                }
            });

        });
        function printErrorMsg (msg) {
        $(".print-error-msg").find("span").html('');
        $(".print-error-msg").css('display','block');
        $.each( msg, function( key, value ) {
            $(".print-error-msg").find("span").append('<span>'+value+'</span>');
        });
    }
    });


</script>
