<!DOCTYPE html>
<html lang="en">

@include('admin.includes.head')
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    @include('admin.includes.navbar')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      @include('admin.includes.settings')
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
        @include('admin.includes.sidebar')
      <!-- partial -->
      <div class="main-panel">
        @yield('content')
        @include('admin.includes.footer')
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  @include('admin.includes.script')
  <!-- End custom js for this page-->
</body>

</html>

