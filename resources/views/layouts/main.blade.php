

<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>blueneek</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
  <!-- New  css -->
      <link rel="stylesheet" href="{{ asset('frontend/css/fonts.css') }}" />
		<link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.weber.css') }}" />
		<link rel="stylesheet" href="{{ asset('frontend/css/fx.css') }}" />
		<link rel="stylesheet" href="{{ asset('frontend/css/magnific-popup.css') }}" />
		<link rel="stylesheet" href="{{ asset('frontend/css/masonryfilter.css') }}" />
           <link rel="stylesheet" href="{{ asset('frontend/css/custom.css') }}" />
		<link rel="stylesheet" href="{{ asset('frontend/css/index.css') }}" />
  <!-- New  css -->

  <!-- bootstrap css -->
  <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
  <!-- style css -->
  <link rel="stylesheet" href=" {{ asset('frontend/css/style.css') }}">
  <!-- Responsive-->
  <link rel="stylesheet" href=" {{ asset('frontend/css/responsive.css') }}">
  <!-- fevicon -->
  <link rel="icon" href="{{ asset('frontend/images/loading.gif') }}" type="image/gif" />
  <!-- Scrollbar Custom CSS -->
  <link rel="stylesheet" href="{{ asset('frontend/css/jquery.mCustomScrollbar.min.css') }} ">
  <!-- Tweaks for older IEs-->
  <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="{{ asset('frontend/images/loading.gif') }}" alt="" /></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                            <div class="logo">
                                <a href="index.html"><img src="{{ asset('frontend/images/logo.png') }}" width="120px;" height="80px;" alt=" Logo" /></a>
                             </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                     <div class="header_information">
                        <nav class="navigation navbar navbar-expand-md navbar-dark ">
                           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                           <span class="navbar-toggler-icon"></span>
                           </button>
                           <div class="collapse navbar-collapse" id="navbarsExample04">
                              <ul class="navbar-nav mr-auto">
                                 <li class="nav-item active">
                                    <li class="nav-item ">
                                       <a class="nav-link" href="/"> Home  </a>
                                    </li> 
                                    <a class="nav-link" href="/about"> About Us  </a>
                                 </li> 
                                 <li class="nav-item">
                                    <a class="nav-link" href="clients.html">Our Clients</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="ourwork.html">Our Work</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="/contact">Contact Us</a>
                                 </li>
                              </ul>
                              <div class="sign_btn"><a href="https://billing.greenviewsoft.com/">Clint Login</a></div>
                           </div>
                        </nav>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- end header inner -->
      <!-- end header -->
       <!-- banner -->
    <div id="myCarousel" class="carousel slide banner_main" data-ride="carousel">
        <ol class="carousel-indicators">
           <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
           <li data-target="#myCarousel" data-slide-to="1"></li>
           <li data-target="#myCarousel" data-slide-to="2"></li>
           <li data-target="#myCarousel" data-slide-to="3"></li>
           <li data-target="#myCarousel" data-slide-to="4"></li>
        </ol>
        <div class="carousel-inner">
           <div class="carousel-item active">
              <img class="first-slide" src="https://images.vexels.com/content/194733/preview/online-shopping-neon-web-slider-c1f66a.png" alt="First slide">
              <div class="container">
                 <div class="carousel-caption relative">
                    <h1 style="color:white;" > <span>We Provide</span> Web Services</h1>
                    <a href="#contact">Contact Us</a>
                 </div>
              </div>
           </div>
           <div class="carousel-item">
              <img class="second-slide" src="https://images.vexels.com/content/194701/preview/online-shopping-slider-template-d1aa6f.png" alt="Second slide">
              <div class="container">
                 <div class="carousel-caption relative">
                    <h1 style="color: white;" > <span>We Provide</span> Web Services</h1>
                    <a href="#contact">Contact Us</a>
                 </div>
              </div>
           </div>
           <div class="carousel-item">
              <img class="third-slide" src="https://images.vexels.com/content/194700/preview/buy-online-slider-template-4261dd.png" alt="Third slide">
              <div class="container">
                 <div class="carousel-caption relative">
                    <h1> <span>We Provide</span> Web Services</h1>
                    <a href="#contact">Contact Us</a>
                 </div>
              </div>
           </div>
           <div class="carousel-item">
              <img class="third-slide" src="https://img.freepik.com/free-vector/template-banner-online-store-with-shopping-cart-with-purchases-boxes-delivery-from-supermarket-vector-illustration_548887-104.jpg?w=2000" alt="four slide">
              <div class="container">
                 <div class="carousel-caption relative">
                    <h1 style="color:white;" > <span>We Provide</span> Web Services</h1>
                    <a href="#contact">Contact Us</a>
                 </div>
              </div>
           </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
        </a>
     </div>
     <!-- end banner -->
  </body>
 </div>
      
@yield('content')


     
      <!--  footer -->
      <footer>
         <div class="footer">
            <div class="container">
               <div class="row border-top">
                  <div class="col-md-6 padding_bottom1   ">
                     <h3>Subscribe Now</h3>
                     <form class="footer_form">
                        <input class="enter" placeholder="Enter your email" type="type" name="Enter your email">
                        <button class="submit">submit</button>
                     </form>
                  </div>
                  <div class="col-md-6">
                     <div class="row">
                        <div class="col-md-5 offset-md-1 padding_bottom1">
                           <h3>Links</h3>
                           <ul class="cont">
                              <li style="color:white;" > <a class="nav-link" href="/terms"> Terms  </a></li>

                           </ul>
                        </div>
                        <div class="col-md-5 offset-md-1">
                           <h3>Contact us</h3>
                           <ul class="cont">
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="copyright">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                        <p>© 2023 All Rights Reserved. <a href="GreenViewSoft"> GreenViewSoft</a></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->
   
  <!-- Javascript files-->
 <script src="{{ asset('frontend/js/jquery.min.js') }}"></script>
 <script src="{{ asset('frontend/js/popper.min.js') }}"></script>
 <script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}"></script>
 <script src="{{ asset('frontend/js/jquery-3.0.0.min.js') }}"></script>

 <!-- sidebar -->
 <script src="{{ asset('frontend/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
 <script src="{{ asset('frontend/js/custom.js') }}"></script>
 <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>

 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
		<script src="{{ asset('frontend/js/jquery-2.1.4.min.js') }}"></script>
		<script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('frontend/js/jquery.magnific-popup.min.js') }}"></script>
		<script src="{{ asset('frontend/js/jquery.validate.min.js') }}"></script>
		<script src="{{ asset('frontend/js/jquery.masonryfilter.js') }}"></script>
		<script src="{{ asset('frontend/js/custom1.js') }}"></script>
		<script src="{{ asset('frontend/js/index1.js') }}"></script>
   </body>
</html>

