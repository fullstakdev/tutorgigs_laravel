<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Tsubasa World - Your child's Global Career Starts here!</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Tsubasa World is a unique education program that provides real world skills to help children succeed in life.">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,400i,500" rel="stylesheet">

    <link href="{{asset('assets/rapid/lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/rapid/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/rapid/lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/rapid/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/rapid/lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/rapid/css/style-header.css')}}" rel="stylesheet">
    <link href="{{asset('assets/rapid/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/theme.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{asset('assets/css/custom.css')}}" rel="stylesheet" type="text/css" media="all" />
    @yield('css')
    
    <style>
      #footer {
        background: #f5f8fd url({{asset('assets/rapid/img/intro-footer-2.jpg')}}) center -100px no-repeat;
	      background-size: cover !importnt;
      }
 
      #footer .footer-top {
	      background: transparent !important;
      }
    </style>
  </head>
  <body>
    <header id="header" class="header--center">
      <div class="container container--center">
        <div class="logo float-left">
          <h1 class="text-light">
            <a href="{{asset('home')}}" class="scrollto">
              <img class="img-fluid" src="{{asset('assets/img/logo.svg')}}" alt="" style="min-width:150px"/>
            </a>
          </h1>
        </div>

        <nav class="main-nav float-right d-none d-lg-block">
          <ul>
            <li>
              <a href="{{asset('home#explore')}}">Explore</a>
            </li>
            <li>
              <a href="{{asset('about')}}">About Us</a>
            </li>
            <li >
              <a href="{{asset('jobs')}}">Jobs</a>
            </li>
            <li>
              <a href="{{asset('about#contact')}}">Contact Us</a>
            </li>
            <li>
              <a class="text-white btn btn-lg btn-danger" style="font-weight:bold" href="{{asset('login')}}">Sign In</a>
            </li>
          </ul>
        </nav>
      </div>
    </header>
    @if (Request::is('home') || Request::is('/'))
    <section id="hero" class="clearfix">
      <div class="container d-flex h-100">
        <div class="row justify-content-center align-self-center col-sm-12">
          <div class="col-md-5 intro-info order-md-first order-last">
            <h2>World belongs</br><span>to every child!</span></h2>
            <p class="description d-none d-sm-block">
              Tsubasa World is a fun filled online platform that lets every child get an overseas study experience and prepare for a successful career. 
            </p>
            <div class="mb-5">
              <a href="#program" class="btn-get-started scrollto">Learn More</a> 
            </div>
            <div>
            </div>
          </div>
          <div class="col-md-7 intro-img order-md-last order-first img-src">
          </div>
        </div>
      </div>
    </section>
    @endif
    <div class="main-container">
      @yield('content')
   <footer id="footer" class="section-bg">
      <div class="footer-top">
        <div class="container">
          <div class="row">
            <div class="col-lg-6">
            </div>
            <div class="col-lg-6">
              <div class="row">
                <div class="col-sm-6">
                  <div class="footer-info">
                    <h3>Tsubasa World</h3>
                    <p>
                      An online platform to provide Global exposure and Study tours to every child in the world!
                    </p>
                  </div>
                  <div class="footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                      <li><a href="{{asset('home')}}">Home</a></li>
                      <li><a href="{{asset('about')}}">About us</a></li>
                      <li><a href="{{asset('terms')}}">Terms of service</a></li>
                      <li><a href="{{asset('privacy')}}">Privacy policy</a></li>
                      <li><a href="{{asset('about#contact')}}">Contact Us</a></li>
                    </ul>
                  </div>
                </div>

                <div class="col-sm-6">
                  <div class="footer-links">
                      <h4 >Contact Us</h4>
                    <p>
                      <b>Japan</b><br />
                      15/F Cerulean Tower<br />
                      26-1 Sakuragaoka-cho<br />
                      Shibuya-ku 150-8512<br />
                      Tokyo<br />
                    </p>

                    <p>
                      <b>Australia</b><br />
                      606/19-21 Hanover St<br />
                      Oakleigh 3166<br />
                      Victoria <br />
                    </p>

                    <p>
                      <b>India</b><br />
                      A-117, First Floor<br />
                      Gd-ITL Northex Tower<br />
                      Netaji Subhas Place<br />
                      Delhi 110034
                    </p>

                    <p>
                      <strong>Email:</strong> info@tsubasaworld.com
                    </p>                                                            
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="copyright">
          &copy; Copyright {{ date('Y') }} <strong>Tsubasa Learning Systems</strong>. All Rights Reserved
        </div>
      </div>
    </footer>
    </div>

    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/popper.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.smartWizard.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.js"></script>
    @yield('js')
	  <script>
      jQuery(document).ready(function($){
        if("ontouchstart" in window){
          document.documentElement.className = document.documentElement.className + " touch";
        }
        if(!$("html").hasClass("touch")){
          $(".parallax").css("background-attachment", "fixed");
        }

        function backgroundResize(){
          var windowH = $(window).height();
          $(".background").each(function(i){
            var path = $(this);
            var contW = path.width();
            var contH = path.height();
            var imgW = path.attr("data-img-width");
            var imgH = path.attr("data-img-height");
            var ratio = imgW / imgH;
            var diff = parseFloat(path.attr("data-diff"));
            diff = diff ? diff : 0;
            var remainingH = 0;
            if(path.hasClass("parallax") && !$("html").hasClass("touch")){
              var maxH = contH > windowH ? contH : windowH;
              remainingH = windowH - contH;
            }
            imgH = contH + remainingH + diff;
            imgW = imgH * ratio;
            if(contW > imgW){
              imgW = contW;
              imgH = imgW / ratio;
            }
            path.data("resized-imgW", imgW);
            path.data("resized-imgH", imgH);
            path.css("background-size", imgW + "px " + imgH + "px");
          });
        }
        $(window).resize(backgroundResize);
        $(window).focus(backgroundResize);
        backgroundResize();

        function parallaxPosition(e){
          var heightWindow = $(window).height();
          var topWindow = $(window).scrollTop();
          var bottomWindow = topWindow + heightWindow;
          var currentWindow = (topWindow + bottomWindow) / 2;
          $(".parallax").each(function(i){
            var path = $(this);
            var height = path.height();
            var top = path.offset().top;
            var bottom = top + height;
            if(bottomWindow > top && topWindow < bottom) {
              var imgW = path.data("resized-imgW");
              var imgH = path.data("resized-imgH");
              var min = 0;
              var max = - imgH + heightWindow;
              var overflowH = height < heightWindow ? imgH - height : imgH - heightWindow;
              top = top - overflowH;
              bottom = bottom + overflowH;
              var value = min + (max - min) * (currentWindow - top) / (bottom - top);
              var orizontalPosition = path.attr("data-oriz-pos");
              orizontalPosition = orizontalPosition ? orizontalPosition : "50%";
              $(this).css("background-position", orizontalPosition + " " + value + "px");
            }
          });
        }
        if(!$("html").hasClass("touch")){
          $(window).resize(parallaxPosition);
          $(window).scroll(parallaxPosition);
          parallaxPosition();
        }
      });
    </script>
    <script src="{{asset('assets/rapid/lib/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('assets/rapid/lib/jquery/jquery-migrate.min.js')}}"></script>
    <script src="{{asset('assets/rapid/lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/rapid/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('assets/rapid/lib/mobile-nav/mobile-nav.js')}}"></script>
    <script src="{{asset('assets/rapid/lib/wow/wow.min.js')}}"></script>
    <script src="{{asset('assets/rapid/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('assets/rapid/lib/counterup/counterup.min.js')}}"></script>
    <script src="{{asset('assets/rapid/lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/rapid/lib/isotope/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('assets/rapid/lib/lightbox/js/lightbox.min.js')}}"></script>
    <script src="{{asset('assets/rapid/contactform/contactform.js')}}"></script>
    <script src="{{asset('assets/rapid/js/main.js')}}"></script>
  </body>
</html>
