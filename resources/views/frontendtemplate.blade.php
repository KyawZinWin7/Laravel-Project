<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Attendance</title>
  <link rel="stylesheet" href="{{asset('my_asset/bootstrap/css/bootstrap.min.css')}}">
  
  <link rel="stylesheet" href="{{asset('my_asset/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('my_asset/css/style1.css')}}">

  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- For our team -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i,900" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('my_asset/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('my_asset/assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
  <link href="{{asset('my_asset/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('my_asset/assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('my_asset/assets/vendor/venobox/venobox.css')}}" rel="stylesheet">
  <link href="{{asset('my_asset/assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{asset('my_asset/assets/vendor/aos/aos.css')}}" rel="stylesheet">


 
</head>
<body>
  <div class="bg-img">
    <nav class="navbar navbar-expand-lg navbar-light">
      <a href="" class="navbar-brand mx-5"><span style="color:#d50000; font-size:30px;">Double</span><span style="color:#AA00FF; font-size:30px;">Vision</span></a>
      <button class="navbar-toggler" data-target="#Nav" data-toggle="collapse">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="Nav">
        <ul class="navbar-nav ml-auto mx-5">
          <!-- <li class="nav-item"><a href="" class="nav-link">Gallery</a></li> -->
          <li class="nav-item"><a href="{{route('mainpage')}}" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="{{route('about')}}" class="nav-link">About</a></li>

          <li class="nav-item"><a href="{{route('contact')}}" class="nav-link">Contact</a></li>

         @auth
          <li class="nav-item"><a href="{{ route('signout') }}" class="nav-link">Signout</a></li>
          @else
           <li class="nav-item"><a href="{{ route('login') }}" class="nav-link">Sign</a></li>
           
          <li class="nav-item"><a href="{{ route('student.create') }}" class="nav-link">Sign Up</a></li>
          
        @endauth


        </ul>
      </div>
    </nav>
  </div>
  @yield('content') 
  

 <!-- Site footer -->
    <footer class="site-footer">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <h6>About</h6>
            <p class="text-justify">kyawzinwin.me <i>CODE WANTS TO BE SIMPLE </i> is an initiative  to help the upcoming programmers with the code. Scanfcode focuses on providing the most efficient code or snippets as the code wants to be simple. We will help programmers build up concepts in different programming languages that include C, C++, Java, HTML, CSS, Bootstrap, JavaScript, PHP, Android, SQL and Algorithm.</p>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6> Course </h6>
            <ul class="footer-links">
              <li><a href="#"> C++ </a></li>
              <li><a href="http://scanfcode.com/category/front-end-development/">UI Design</a></li>
              <li><a href="http://scanfcode.com/category/back-end-development/">PHP</a></li>
              <li><a href="http://scanfcode.com/category/java-programming-language/">Java</a></li>
              <li><a href="http://scanfcode.com/category/android/">Android</a></li>
            </ul>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Quick Links</h6>
            <ul class="footer-links">
              <li><a href="{{route('about')}}">About Us</a></li>
              <li><a href="{{route('contact')}}">Contact Us</a></li>
              <li><a href="#">Privacy Policy</a></li>
            </ul>
          </div>
        </div>
        <hr>
      </div>
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text"> Copyright &copy; 2021 All Rights Reserved by 
         <a href="http://kyawzinwin.me/"> kyawzinwin</a>.
            </p>
          </div>

          <div class="col-md-4 col-sm-6 col-xs-12">
            <ul class="social-icons">
              <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
              <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>   
            </ul>
          </div>
        </div>
      </div>
    </footer>
 

 
  @yield('script')


<script src="{{asset('my_asset/bootstrap/js/jquery.min.js')}}"></script>
<script src="{{asset('my_asset/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- for our team -->
 <!-- Vendor JS Files -->
<script src="{{asset('my_asset/assets/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('my_asset/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('my_asset/assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
<script src="{{asset('my_asset/assets/vendor/php-email-form/validate.js')}}"></script>
<script src="{{asset('my_asset/assets/vendor/jquery-sticky/jquery.sticky.js')}}"></script>
<script src="{{asset('my_asset/assets/vendor/venobox/venobox.min.js')}}"></script>
<script src="{{asset('my_asset/assets/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('my_asset/assets/vendor/counterup/counterup.min.js')}}"></script>
<script src="{{asset('my_asset/assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('my_asset/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('my_asset/assets/vendor/aos/aos.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('my_asset/assets/js/main.js')}}"></script>


</body>

</html>