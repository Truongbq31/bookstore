<!doctype html>
<html lang="en">

<!-- Mirrored from templates.iqonic.design/booksto/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 16 Sep 2023 07:54:13 GMT -->
<head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Booksto - Responsive Bootstrap 4 Admin Dashboard Template</title>
      <!-- Favicon -->
      <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" />
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
      <!-- Typography CSS -->
      <link rel="stylesheet" href="{{ asset('css/typography.css') }}">
      <!-- Style CSS -->
      <link rel="stylesheet" href="{{ asset('css/style.css') }}">
      <!-- Responsive CSS -->
      <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
   </head>
   <body>
      <!-- loader Start -->
      {{-- <div id="loading">
         <div id="loading-center">
         </div>
      </div> --}}
      <!-- loader END -->

      <!-- Wrapper Start -->
      <div class="wrapper">
        @include('templates.sidebar')
        @include('templates.navbar')
        @yield('content')
      </div>
      <!-- Wrapper END -->

      <!-- Footer -->
      <footer class="iq-footer">
         <div class="container-fluid">
            <div class="row">
               <div class="col-lg-6">
                  <ul class="list-inline mb-0">
                     <li class="list-inline-item"><a href="privacy-policy.html">Privacy Policy</a></li>
                     <li class="list-inline-item"><a href="terms-of-service.html">Terms of Use</a></li>
                  </ul>
               </div>
               <div class="col-lg-6 text-right">
                  Copyright 2023 <a href="#">Bookstore</a> All Rights Reserved.
               </div>
            </div>
         </div>
      </footer>
      <!-- Footer END -->

      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="{{asset('js/jquery.min.js')}}"></script>
      <script src="{{asset('js/popper.min.js')}}"></script>
      <script src="{{asset('js/bootstrap.min.js')}}"></script>
      <!-- Appear JavaScript -->
      <script src="{{asset('js/jquery.appear.js')}}"></script>
      <!-- Countdown JavaScript -->
      <script src="{{asset('js/countdown.min.js')}}"></script>
      <!-- Counterup JavaScript -->
      <script src="{{asset('js/waypoints.min.js')}}"></script>
      <script src="{{asset('js/jquery.counterup.min.js')}}"></script>
      <!-- Wow JavaScript -->
      <script src="{{asset('js/wow.min.js')}}"></script>
      <!-- Apexcharts JavaScript -->
      <script src="{{asset('js/apexcharts.js')}}"></script>
      <!-- Slick JavaScript -->
      <script src="{{asset('js/slick.min.js')}}"></script>
      <!-- Select2 JavaScript -->
      <script src="{{asset('js/select2.min.js')}}"></script>
      <!-- Owl Carousel JavaScript -->
      <script src="{{asset('js/owl.carousel.min.js')}}"></script>
      <!-- Magnific Popup JavaScript -->
      <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
      <!-- Smooth Scrollbar JavaScript -->
      <script src="{{asset('js/smooth-scrollbar.js')}}"></script>
      <!-- lottie JavaScript -->
      <script src="{{asset('js/lottie.js')}}"></script>
      <!-- am core JavaScript -->
      <script src="{{asset('js/core.js')}}"></script>
      <!-- am charts JavaScript -->
      <script src="{{asset('js/charts.js')}}"></script>
      <!-- am animated JavaScript -->
      <script src="{{asset('js/animated.js')}}"></script>
      <!-- am kelly JavaScript -->
      <script src="{{asset('js/kelly.js')}}"></script>
      <!-- am maps JavaScript -->
      <script src="{{asset('js/maps.js')}}"></script>
      <!-- am worldLow JavaScript -->
      <script src="{{asset('js/worldLow.js')}}"></script>
      <!-- Raphael-min JavaScript -->
      <script src="{{asset('js/raphael-min.js')}}"></script>
      <!-- Morris JavaScript -->
      <script src="{{asset('js/morris.js')}}"></script>
      <!-- Morris min JavaScript -->
      <script src="{{asset('js/morris.min.js')}}"></script>
      <!-- Flatpicker Js -->
      <script src="{{asset('js/flatpickr.js')}}"></script>
      <!-- Style Customizer -->
      <script src="{{asset('js/style-customizer.js')}}"></script>
      <!-- Chart Custom JavaScript -->
      <script src="{{asset('js/chart-custom.js')}}"></script>
      <!-- Custom JavaScript -->
      <script src="{{asset('js/custom.js')}}"></script>
   </body>

<!-- Mirrored from templates.iqonic.design/booksto/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 16 Sep 2023 07:55:23 GMT -->
</html>
