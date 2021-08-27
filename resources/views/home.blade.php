<!DOCTYPE html>
<html lang="en">
    <head>
        <title>TutorGigs</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta charset="utf-8">
        <meta name="author" content="Harry Boo">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
        
        <!-- Favicons -->
        <link rel="icon" type="image/png" sizes="32x32" href="{{asset('assets/img/favicons/favicon-32x32.png')}}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/img/favicons/favicon-16x16.png')}}">
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/img/favicons/favicon.ico')}}">
        
        <!-- Load Core CSS 
        =====================================-->
        <link rel="stylesheet" href="assets_home/css/core/bootstrap-3.3.7.min.css">
        <link rel="stylesheet" href="assets_home/css/core/animate.min.css">
        
        <!-- Load Main CSS 
        =====================================-->
        <link rel="stylesheet" href="assets_home/css/main/main.css">
        <link rel="stylesheet" href="assets_home/css/main/setting.css">
        <link rel="stylesheet" href="assets_home/css/main/hover.css">
        
        <!-- Load Magnific Popup CSS 
        =====================================-->
        <link rel="stylesheet" href="assets_home/css/magnific/magic.min.css">        
        <link rel="stylesheet" href="assets_home/css/magnific/magnific-popup.css">              
        <link rel="stylesheet" href="assets_home/css/magnific/magnific-popup-zoom-gallery.css">
        
        <!-- Load OWL Carousel CSS 
        =====================================-->
        <link rel="stylesheet" href="assets_home/css/owl-carousel/owl.carousel.css">
        <link rel="stylesheet" href="assets_home/css/owl-carousel/owl.theme.css">
        <link rel="stylesheet" href="assets_home/css/owl-carousel/owl.transitions.css">
        
        <!-- Load Color CSS - Please uncomment to apply the color.
        =====================================      
        <link rel="stylesheet" href="assets_home/css/color/blue.css">
        <link rel="stylesheet" href="assets_home/css/color/brown.css">
        <link rel="stylesheet" href="assets_home/css/color/cyan.css">
        <link rel="stylesheet" href="assets_home/css/color/dark.css">
        <link rel="stylesheet" href="assets_home/css/color/green.css">
        <link rel="stylesheet" href="assets_home/css/color/orange.css">
        <link rel="stylesheet" href="assets_home/css/color/purple.css">
        <link rel="stylesheet" href="assets_home/css/color/pink.css">
        <link rel="stylesheet" href="assets_home/css/color/red.css">
        <link rel="stylesheet" href="assets_home/css/color/yellow.css">-->
        <link rel="stylesheet" href="assets_home/css/color/pasific.css">
        
        <!-- Load Fontbase Icons - Please Uncomment to use linea icons
        =====================================       
        <link rel="stylesheet" href="assets_home/css/icon/linea-arrows-10.css">
        <link rel="stylesheet" href="assets_home/css/icon/linea-basic-10.css">
        <link rel="stylesheet" href="assets_home/css/icon/linea-basic-elaboration-10.css">
        <link rel="stylesheet" href="assets_home/css/icon/linea-ecommerce-10.css">
        <link rel="stylesheet" href="assets_home/css/icon/linea-music-10.css">
        <link rel="stylesheet" href="assets_home/css/icon/linea-software-10.css">
        <link rel="stylesheet" href="assets_home/css/icon/linea-weather-10.css">--> 
        <link rel="stylesheet" href="assets_home/css/icon/font-awesome.css">
        <link rel="stylesheet" href="assets_home/css/icon/et-line-font.css">
        
        <!-- Load JS
        HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries
        WARNING: Respond.js doesn't work if you view the page via file://
        =====================================-->

        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        
    </head>
    <body  id="page-top" data-spy="scroll" data-target=".navbar" data-offset="100">
       
        <!-- Page Loader
        ===================================== -->
		<div id="pageloader" class="bg-grad-animation-1">
			<div class="loader-item">
                 <i class="glyphicon glyphicon-text-size" style="color:blue; font-size:40px"></i>
            </div>
		</div>
        
        <a href="#page-top" class="go-to-top">
            <i class="fa fa-long-arrow-up"></i>
        </a>
        
        <!-- Navigation Area
        ===================================== -->
        <nav class="navbar navbar-pasific navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#page-top">
                        <img src="{{asset('assets_old/img/logo.png')}}" alt="logo">
                       
                    </a>
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="navbar-collapse collapse navbar-right">
                    <ul class="nav navbar-nav mr20">
                        <li class="hidden"><a href="#page-top"></a></li>
                        <li><a href="#welcome">Welcome</a></li>
                       
                        <li><a href="#service">Service</a></li>
                        <li><a href="#team">Team</a></li>
                        <li><a href="#features">Features</a></li>
                       
                        <li><a href="#blogs">Blog</a></li>                      
                        <li><a href="#contact">Contact</a></li>                        
                        <li><a href="{{url('login')}}" ><i class="fa fa-lock fa-fw"></i>Login</a></li>
                        <li><a href="{{url('signup')}}" ><i class="fa fa-lock fa-fw"></i>Signup</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        
        <!-- Login Modal Dialog Box
        ===================================== -->
        <div id="loginModal" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- modal content start -->
                <div class="modal-content">
                    <div class="modal-header bg-gray">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h5 class="modal-title text-center"><i class="fa fa-lock fa-fw"></i> Sign In</h5>
                    </div>
                    <div class="modal-body pt25">
                        <div class="text-center">
                            <span class="color-dark">Sign in with your social account</span><br>
                            <a href="#">
                                <img src="assets_home/img/other/fbconnect.png" alt="" class="mt10 mb10">
                            </a>
                            <a href="#">
                                <img src="assets_home/img/other/twconnect.png" alt="" class="mt10 mb10"><br><br>
                            </a>
                            <span class="color-dark">- Or sign in with your email address -</span>
                        </div>
                        
                        <form class="form-horizontal mt25 ml50">
                          <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                            <div class="col-sm-8">
                              <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                            <div class="col-sm-8">
                              <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-8">
                              <button type="submit" class="button button-pasific button-block">Sign in</button>
                                
                            </div>
                          </div>
                        </form>
                    </div>
                    <div class="modal-footer bg-gray">
                        <span class="text-center">Don't have an account? <a href="{{url('signup')}}" class="color-dark">Register Now</a></span>
                    </div>
                </div>
                <!-- modal content end -->

            </div>
        </div>
        
        
        <!-- Search Modal Dialog Box
        ===================================== -->
        <div id="searchModal" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- modal content start -->
                <div class="modal-content">
                    <div class="modal-header bg-gray">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h5 class="modal-title text-center"><i class="fa fa-search fa-fw"></i> Search here</h5>
                    </div>
                    <div class="modal-body">                        
                        <form action="#" class="inline-form">
                            <input type="text" class="modal-search-input" autofocus>
                        </form>
                    </div>
                    <div class="modal-footer bg-gray">
                        <span class="text-center"><a href="#" class="color-dark">Advanced Search</a></span>
                    </div>
                </div>
                <!-- modal content end -->

            </div>
        </div>
        
        
        <!-- Intro Area
        ===================================== -->
        <header class="intro pt100 pb100 parallax-window" data-parallax="scroll" data-speed="0.5" data-image-src="assets_home/img/bg/bg_1.png">
            <div class="intro-body">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="brand-heading font-montserrat text-uppercase color-light tlt" data-in-effect="fadeInDown">Welcome to Tutor Gigs</h1>
                            <p class="intro-text color-light text-open-sans text-uppercase tlt" data-in-effect="swing">Smart. Small. Studio. All Ideas Comes From This Home.</p>
                            <a href="{{url('signup')}}" class="button button-pasific button-lg hover-ripple-out mt50 animated" data-animation="fadeInUp" data-animation-delay="1200">Get Started Now</a>
                        </div>
                    </div>
                </div>
                
                <div class="intro-direction">
                    <a href="#welcome">
                        <div class="mouse-icon"><div class="wheel"></div></div>
                    </a>
                </div>
                
            </div>
        </header>

        
        <!-- Welcome Area
        ===================================== -->
        <div id="welcome" class="pt75">
            <div class="container">
                <div class="row">
                    
                    <!-- title start -->
                    <div class="col-md-12 text-center">
                        <h1 class="font-size-normal">
                            <small>Welcome to Tutor Gigs</small>
                            We Are Smart Virtual Calssroom
                            <small class="heading heading-solid center-block"></small>
                        </h1>
                    </div>
                    <!-- title end -->
                    
                    <!-- title description start -->
                    <div class="col-md-8 col-md-offset-2 text-center">
                        <p>
                            <span class="lead"><strong>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem aperiam 
                            eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta.</strong></span><br><br>

                            Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. 
                            Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. 
                        </p>
                    </div>
                    <!-- title description end -->
                </div>
                
                <div class="row mt50">
                    
                    <!-- item one start -->
                    <div class="col-md-3 col-sm-6 col-xs-6 animated" data-animation="fadeInLeft" data-animation-delay="100">
                        <div class="content-box content-box-center">                        
                            <span class="icon-layers color-pasific"></span>
                                <h5>Quality</h5>
                            <p>Pellentesque ipsum erat, facilisis ut venenatis eu, sodales vel dolor.</p>
                      
                        </div>
                    </div>
                    <!-- item one end -->
                    
                    <!-- item two start -->
                    <div class="col-md-3 col-sm-6 col-xs-6 animated" data-animation="fadeInLeft" data-animation-delay="200">
                        <div class="content-box content-box-center">                        
                            <span class="icon-mobile color-pasific"></span>
                                <h5>Accept Jobs</h5>
                            <p>Pellentesque ipsum erat, facilisis ut venenatis eu, sodales vel dolor.</p>
                      
                        </div>
                    </div>
                    <!-- item two end -->
                    
                    <!-- item three start -->
                    <div class="col-md-3 col-sm-6 col-xs-6 animated" data-animation="fadeInRight" data-animation-delay="300">
                        <div class="content-box content-box-center">                        
                            <span class="icon-camera color-pasific"></span>
                                <h5>Cash Out</h5>
                            <p>Pellentesque ipsum erat, facilisis ut venenatis eu, sodales vel dolor.</p>
                      
                        </div>
                    </div>
                    <!-- item three end -->
                    
                    <!-- item four start -->
                    <div class="col-md-3 col-sm-6 col-xs-6 animated" data-animation="fadeInRight" data-animation-delay="400">
                        <div class="content-box content-box-center">                        
                            <span class="icon-briefcase color-pasific"></span>
                                <h5>Awesome Portfolio</h5>
                            <p>Pellentesque ipsum erat, facilisis ut venenatis eu, sodales vel dolor.</p>
                      
                        </div>
                    </div>
                    <!-- item four start -->                    
                    
                </div>                
            </div>
        </div>
        
        
        <!-- Fun Fact Area
        ===================================== -->
        <div id="fact" class="bg-grad-stellar pt100 pb100">
            <div class="container">
                
                <!-- title and short description start -->
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center mb50">                        
                        <h1 class="font-size-normal color-light">
                            <small class="color-light">Your Business Partner</small>
                            Better Solution for Better Services
                        </h1>
                        
                    </div>
                </div>
                <!-- title and short description end -->
                
                <div class="row">
                    
                    <!-- fun fact left start -->
                    <div class="col-md-3">
                        <div class="row">
                            
                            <!-- fun fact one start -->
                            <div class="col-md-12 col-sm-6 col-xs-6">
                                <div class="fact">                                    
                                    <div class="fact-number timer" data-perc="3870">
                                        <span class="factor color-light"></span>
                                    </div>                                    
                                    <span class="fact-title color-light alpha7">Vitual Classes Completed</span>
                                </div>
                            </div>
                            <!-- fun fact one end -->
                            
                            <!-- fun fact two start -->
                            <div class="col-md-12 col-sm-6 col-xs-6">
                                <div class="fact">
                                    <div class="fact-number timer" data-perc="578">
                                        <span class="factor color-light"></span>
                                    </div>
                                    <span class="fact-title color-light alpha7">Happy Tutors</span>
                                </div>
                            </div>
                            <!-- fun fact two end -->
                            
                        </div>
                    </div>
                    <!-- fun fact left end -->
                    
                    <!-- fun fact right start -->
                    <div class="col-md-3 col-md-push-6">
                        <div class="row">
                            
                            <!-- fun fact three start -->
                            <div class="col-md-12 col-sm-6 col-xs-6">
                                <div class="fact">
                                    <div class="fact-number timer" data-perc="1750">
                                        <span class="factor color-light"></span>
                                    </div>
                                    <span class="fact-title color-light alpha7">Students</span>
                                </div>
                            </div>
                            <!-- fun fact three end -->
                            
                            <!-- fun fact four start -->
                            <div class="col-md-12 col-sm-6 col-xs-6">
                                <div class="fact">
                                    <div class="fact-number timer" data-perc="3500">
                                        <span class="factor color-light"></span>
                                    </div>
                                    <span class="fact-title color-light alpha7">Applicants</span>
                                </div>
                            </div>
                            <!-- fun fact four end -->
                            
                        </div>
                    </div>
                    <!-- fun fact right end -->
                    
                    <div class="col-md-6 col-md-pull-3">
                        <img src="assets_home/img/other/map.png" alt="macbook" class="img-responsive">
                    </div>
                    
                </div>
                
                <div class="row">
                    <div class="col-sm-8 col-sm-push-2 text-center">
                        <h4 class="pt25 color-light">Looking for an online tutoring job? Well...when can you start?</h4>
                        <p class="pb10 color-light alpha8">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                        <a href="#" class="button button-md button-gray hover-ripple-out"><span class="color-primary">Get Started Now</span></a>
                    </div>
                </div>
                
            </div><!-- container end -->
        </div><!-- section fun fact end -->
        
        
        
        <!-- Service Area
        ===================================== -->
        <div id="service" class="pt75 pb25">
            <div class="container">
                
                <!-- title and short description start -->
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1 class="font-size-normal">
                            <small>Modern Service</small>
                            We Provide Modern Virtuall Classroom
                            <small class="heading heading-solid center-block"></small>
                        </h1>
                    </div>

                    <div class="col-md-8 col-md-offset-2 text-center">
                        <p class="lead">
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                            Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt voluptatem. 
                        </p>
                    </div>
                </div>
                <!-- title and short description end -->
                
                <!-- service one start -->
                <div class="row mt75">
                    <div class="col-md-6 animated" data-animation="fadeInLeft" data-animation-delay="100">
                        <img src="assets_home/img/other/Trackable-Learning.jpg" alt="website service" class="img-responsive">
                    </div>
                    <div class="col-md-5 animated" data-animation="fadeIn" data-animation-delay="100">
                        
                        <h3 class="font-size-normal">
                            <small class="color-primary">Virtual Classroom API</small>
                           Newrow Whiteboard
                        </h3>
                        
                        <p class="mt20">
                            We design &amp; develope modern website and app for any type of business. Landing page, ecommerce, company profile, web application, mobile app,
                            anything that you want to make great success.
                        </p>
                        <p>
                            <i class="fa fa-wordpress fa-2x color-gray2 mr10"></i>
                            <i class="fa fa-joomla fa-2x color-gray2 mr10"></i>
                            <i class="fa fa-drupal fa-2x color-gray2 mr10"></i>
                            <i class="fa fa-shopping-basket fa-2x color-gray2 mr10"></i>
                        </p>
                        <p>
                            <a class="button-o button-sm button-primary hover-fade">Start Project</a>
                        </p>
                    </div>
                </div>
                <!-- service one end -->
                
                <!-- service two start -->
                <div class="row mt100">
                    <div class="col-md-6 col-md-push-6 animated" data-animation="fadeInRight" data-animation-delay="100">
                        <img src="assets_home/img/other/image_4.png" alt="website service" class="img-responsive">
                    </div>
                    <div class="col-md-5 col-md-pull-5">
                        
                        <h3 class="font-size-normal">
                            <small class="color-success">Virtual Classroom API</small>
                            Merit Hub Virtual Whiteboard
                        </h3>
                        
                        <p class="mt20 animated" data-animation="fadeIn" data-animation-delay="100">
                            We design &amp; develope modern website and app for any type of business. Landing page, ecommerce, company profile, web application, mobile app,
                            anything that you want to make great success.
                        </p>
                        <p>
                            <i class="fa fa-android fa-2x color-gray2 mr10"></i>
                            <i class="fa fa-apple fa-2x color-gray2 mr10"></i>
                            <i class="fa fa-windows fa-2x color-gray2 mr10"></i>
                            <i class="fa fa-amazon fa-2x color-gray2 mr10"></i>
                        </p>
                        <p>
                            <a href="{{url('signup')}}" class="button-o button-sm button-success hover-fade">Start Now</a>
                        </p>
                    </div>
                </div>
                <!-- service two end -->
                
                
                
            </div><!-- container end -->
        </div><!-- section service end -->
        
        
        <!-- Info Area
        ===================================== -->
        <div id="info-1" class="pt50 pb50 mt75 parallax-window" data-parallax="scroll" data-speed="0.5" data-image-src="assets_home/img/bg/bg_7.png">
            <div class="container">
                <div class="row pt75">
                    <div class="col-md-12 text-center">
                        <h1 class="color-light">
                            <small class="color-light">The best way to be success</small>
                            Are you ready to be success with us?
                        </h1>
                        <a class="button button-md button-pasific hover-ripple-out mt25">Start Project</a>
                        <a class="button-o button-md button-green hover-fade mt25"><span class="color-light">Contact Us</span></a>
                    </div>   
                </div>
            </div>
        </div>
        
        
        <!-- Team Area
        ===================================== -->
        <div id="team" class="pt75">
            <div class="container">
                
                <!-- title and short description start -->
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1 class="font-size-normal">
                            <small>Amazing Team</small>
                            We have a lot of Smart People
                            <small class="heading heading-solid center-block"></small>
                        </h1>
                    </div>

                    <div class="col-md-8 col-md-offset-2 text-center">
                        <p class="lead">
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                            Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt voluptatem. 
                        </p>
                    </div>
                </div>
                <!-- title and short description end -->
                
            </div>
            
            <div class="container-fluid">            
                <div class="row">
                    
                    <!-- team member one start -->
                    <div class="col-md-2 col-md-offset-1 col-sm-4 col-xs-6 mt30">                    
                        <div class="team team-two">                            
                            <img src="assets_home/img/team/testimonial-img4.jpg" alt="" class="img-responsive">
                            <div class="team-social">
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-github"></i></a>
                            </div>
                            <h5>Michael Doe<small class="color-pasific">Co-Founder &amp; CEO</small></h5>                            
                        </div>                    
                    </div>
                    <!-- team member one end -->
                    
                    <!-- team member two start -->
                    <div class="col-md-2 col-sm-4 col-xs-6 mt30">
                        <div class="team team-two">                            
                            <img src="assets_home/img/team/testimonial-img2.jpg" alt="" class="img-responsive">
                            <div class="team-social">
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-github"></i></a>
                            </div>
                            <h5>Michael Doe<small class="color-pasific">Co-Founder &amp; CEO</small></h5>                            
                        </div>                    
                    </div>
                    <!-- team member two end -->
                    
                    <!-- team member three start -->                    
                    <div class="col-md-2 col-sm-4 col-xs-6 mt30">
                        <div class="team team-two">                            
                            <img src="assets_home/img/team/testimonial-img3.jpg" alt="" class="img-responsive">
                            <div class="team-social">
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-github"></i></a>
                            </div>
                            <h5>Michael Doe<small class="color-pasific">Co-Founder &amp; CEO</small></h5>                            
                        </div>                    
                    </div>
                    <!-- team member three end -->
                    
                    <!-- team member four start -->                    
                    <div class="col-md-2 col-sm-4 col-xs-6 mt30">
                        <div class="team team-two">                            
                            <img src="assets_home/img/team/testimonial-img4.jpg" alt="" class="img-responsive" >
                            <div class="team-social">
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-github"></i></a>
                            </div>
                            <h5>Michael Doe<small class="color-pasific">Co-Founder &amp; CEO</small></h5>                            
                        </div>                    
                    </div>
                    <!-- team member four end -->
                    
                    <!-- team member five start -->                    
                    <div class="col-md-2 col-sm-4 col-xs-6 mt30">
                        <div class="team team-two">                            
                            <img src="assets_home/img/team/testimonial-img2.jpg" alt="" class="img-responsive">
                            <div class="team-social">
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-github"></i></a>
                            </div>
                            <h5>Michael Doe<small class="color-pasific">Co-Founder &amp; CEO</small></h5>                            
                        </div>                    
                    </div>
                    <!-- team member five end -->
                    
                </div><!-- row end -->                
            </div><!-- container end -->            
        </div><!-- section team end -->
        
        
       
        
        
       
        
        
        <!-- Features Area
        ===================================== -->
        <div id="features" class="pt75 mb25">
            <div class="container">
                
                <!-- title and short description start -->
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1 class="font-size-normal">
                            <small>Amazing Features</small>
                            We Have Best Features
                            <small class="heading heading-solid center-block"></small>
                        </h1>
                    </div>

                    <div class="col-md-8 col-md-offset-2 text-center">
                        <p class="lead">
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                            Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt voluptatem. 
                        </p>
                    </div>
                </div>
                <!-- title and short description end -->
                
                <div class="row mt50">
                    <!-- feature one start -->
                    <div class="col-md-3 col-sm-6 col-xs-12 mb35">
                        <div class="content-box content-box-center content-box-icon-o">
                            <span class="icon-mobile color-primary border-primary"></span>
                            <h5>Mobile Optimized</h5>               
                            <p>Pellentesque ipsum erat, facilisis ut venenatis eu, sodales vel dolor.</p>
                        </div>
                    </div>
                    <!-- feature one end -->
                    
                    <!-- feature two start -->
                    <div class="col-md-3 col-sm-6 col-xs-12 mb35">
                        <div class="content-box content-box-center content-box-icon-o">
                            <span class="icon-documents color-success border-success"></span>
                            <h5>Online Documentation</h5>               
                            <p>Pellentesque ipsum erat, facilisis ut venenatis eu, sodales vel dolor.</p>
                        </div>
                    </div>
                    <!-- feature two end -->
                    
                    <!-- feature three start -->
                    <div class="col-md-3 col-sm-6 col-xs-12 mb35">
                        <div class="content-box content-box-center content-box-icon-o">
                            <span class="icon-basket color-cyan border-cyan"></span>
                            <h5>Shop Ready</h5>               
                            <p>Pellentesque ipsum erat, facilisis ut venenatis eu, sodales vel dolor.</p>
                        </div>
                    </div>
                    <!-- feature three end -->
                    
                    <!-- feature four start -->
                    <div class="col-md-3 col-sm-6 col-xs-12 mb35">
                        <div class="content-box content-box-center content-box-icon-o">
                            <span class="icon-layers color-pasific border-pasific"></span>
                            <h5>Clean Code</h5>               
                            <p>Pellentesque ipsum erat, facilisis ut venenatis eu, sodales vel dolor.</p>
                        </div>
                    </div>
                    <!-- feature four end -->
                    
                  
                    
                </div><!-- row end -->                
            </div><!-- container end -->
        </div><!-- section feature end -->
        
        
      
        
        
        <!-- Achievement Area
        ===================================== -->
        <div class="pt50" style="background: url(assets_home/img/bg/bg-wood.jpg) 100% 100% repeat-x #e8f3f5;">
            <div class="container">
                
                <!-- title and short description start -->
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="font-source-sans-pro text-center mb50">                          
                            
                            The Best Web &amp; Mobile &amp; iPad Virtual Classroom
                            <small class="heading-desc text-lowercase color-dark">
                                Every day, We makes thousands of customers happy.
                            </small>
                        </h2>
                    </div>
                </div>
               
                
                <div class="col-md-12">
                    <img src="assets_home/img/other/img-other-6.png" alt="device" class="img-responsive center-block">
                </div>
                
            </div><!-- container end -->
        </div><!-- section achievment end -->
        
        
        <!-- Info Area
        ===================================== -->
        <div id="Info-1" class="bg-gray pt30 bb-solid-1">
            <div class="container">
                <div class="row">                
                    <div class="col-md-8 col-md-offset-2 text-center pb35">
                        <h4>We are here to help you reach success</h4>
                       
                        <a href="{{url('signup')}}" class="button button-md button-pasific hover-ripple-out">Start Now</a>
                    </div>                
                </div>
            </div>
        </div>
        
        
        <!-- General Content Area
        ===================================== -->
        <div id="general-content-1" class="pt100 pb100">
            <div class="container">
                <div class="row">
                    
                    <!-- left content start -->
                    <div class="col-md-5">
                        <div class="general-content">
                            <h3 class="mb25">
                                <small class="color-red">Mobile Optimized</small>
                                Support for All Mobile Devices
                            </h3>
                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui 
                                ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia 
                                non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                            <a class="button button-md button-pasific hover-ripple-out">Start Now</a>
                            
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <!-- left content end -->
                    
                    <!-- right content start -->
                    <div class="col-md-5 col-md-push-1">
                        <img src="assets_home/img/other/img-other-1.png" alt="browser iphone" class="img-responsive pull-right">
                    </div>
                    <!-- right content end -->
                    
                </div>
            </div>
        </div>
        
        
        <!-- General Content Area
        ===================================== -->
        <div id="general-content-2" class="bg-gray pt100 pb100">
            <div class="container">
                <div class="row">
                    
                    <!-- left content start -->
                    <div class="col-md-6">
                        <img src="assets_home/img/other/observer.jpg" alt="browser iphone" class="img-responsive center-block">
                    </div>
                    <!-- left content end -->
                    
                    <!-- right content start -->
                    <div class="col-md-5 col-md-push-1">
                        <div class="general-content">
                            <h3 class="mb25">
                                <small class="color-red">Observer</small>
                                Online Observer Ready
                            </h3>
                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui 
                                ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia 
                                non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                            <a class="button button-md button-pasific hover-ripple-out">Start Now</a>
                            
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <!-- right content end -->                    
                    
                </div><!-- row end -->
            </div><!-- container end -->
        </div><!-- section general info end -->
        
       
        <!-- Blog Area
        ===================================== -->
        <div id="blogs" class="bg-gray pt75 pb75">
            <div class="container">
                
                <!-- title start -->
                <div class="row text-center mb25">
                    <h1 class="font-size-normal">
                        <small>Our Blog</small>
                        We Have Freebies, News, Tutorial, etc.
                        <small class="heading heading-solid center-block"></small>
                    </h1>
                </div>
                <!-- title end -->
                
                <div class="row">
                    
                    <!-- blog post start -->
                    <div class="col-md-4 col-sm-6 col-xs-12 mb50">
                        <div class="blog-one">
                            <div class="blog-one-header">
                                <img src="assets_home/img/blog/img-blog-2.jpg" alt="image blog" class="img-responsive">
                            </div>
                            <div class="blog-one-attrib">                                
                                <img src="assets_home/img/blog/photo-1.png" alt="photo blog" class="blog-author-photo">
                                <span class="blog-author-name">Harry Boo</span>
                                <span class="blog-date">PEB. 14 2016</span>                                                           
                            </div>
                            <div class="blog-one-body">
                                <h4 class="blog-title"><a href="#">Amazing Blog Post One</a></h4>
                                <p class="">
                                    Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur.
                                </p>
                            </div>
                            <div class="blog-one-footer">
                                <a href="#">Read More</a>
                                <i class="fa fa-heart"></i>59 Likes
                                <i class="fa fa-comments"></i><a href="#">120 Comments</a>
                            </div>
                        </div>
                    </div>
                    <!-- blog post end -->
                    
                    <!-- blog post start -->
                    <div class="col-md-4 col-sm-6 col-xs-12 mb50">
                        <div class="blog-one">
                            <div class="blog-one-header">
                                <img src="assets_home/img/blog/img-blog-4.jpg" alt="image blog" class="img-responsive">
                            </div>
                            <div class="blog-one-attrib">                                
                                <img src="assets_home/img/blog/photo-1.png" alt="photo blog" class="blog-author-photo">
                                <span class="blog-author-name">Melanie Boo</span>
                                <span class="blog-date">PEB. 14 2016</span>                                                           
                            </div>
                            <div class="blog-one-body">
                                <h4 class="blog-title"><a href="#">Amazing Blog Post One</a></h4>
                                <p class="">
                                    Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur.
                                </p>
                            </div>
                            <div class="blog-one-footer">
                                <a href="#">Read More</a>
                                <i class="fa fa-heart"></i>59 Likes
                                <i class="fa fa-comments"></i><a href="#">120 Comments</a>
                            </div>
                        </div>
                    </div>
                    <!-- blog post end -->
                    
                    <!-- blog post start -->                    
                    <div class="col-md-4 col-sm-6 col-xs-12 mb50">
                        <div class="blog-one">
                            <div class="blog-one-header">
                                <img src="assets_home/img/blog/img-blog-3.jpg" alt="image blog" class="img-responsive">
                            </div>
                            <div class="blog-one-attrib">                                
                                <img src="assets_home/img/blog/photo-1.png" alt="photo blog" class="blog-author-photo">
                                <span class="blog-author-name">Harry Boo</span>
                                <span class="blog-date">PEB. 14 2016</span>                                                           
                            </div>
                            <div class="blog-one-body">
                                <h4 class="blog-title"><a href="#">Amazing Blog Post One</a></h4>
                                <p class="">
                                    Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur.
                                </p>
                            </div>
                            <div class="blog-one-footer">
                                <a href="#">Read More</a>
                                <i class="fa fa-heart"></i>59 Likes
                                <i class="fa fa-comments"></i><a href="#">120 Comments</a>
                            </div>
                        </div>
                    </div>
                    <!-- blog post end -->                   
                    
                </div><!-- row end -->                
            </div><!-- container end -->
        </div><!-- section blog end -->
        
        
        <!-- Newsletter Area
        =====================================-->
        <div id="newsletter" class="bg-dark2 pt50 pb50">
            <div class="container">
                <div class="row">                    
                    <div class="col-md-2">
                        <h4 class="color-light">
                            Newsletter
                        </h4>
                    </div>
                    
                    <div class="col-md-10">
                        <form name="newsletter">
                            <div class="input-newsletter-container">
                                <input type="text" name="email" class="input-newsletter" placeholder="enter your email address">
                            </div>
                            <a href="#" class="button button-sm button-pasific hover-ripple-out">Subscribe<i class="fa fa-envelope"></i></a>
                        </form>
                    </div>
                </div><!-- row end -->
            </div><!-- container end -->
        </div><!-- section newsletter end -->
        
        
        <!-- Testimonial Area
        ===================================== -->
        <div id="testimonial" class="pt75 pb75">
            <div class="container">
                
                <!-- title start -->
                <div class="row text-center mb25">
                    <h1 class="font-size-normal">
                        <small>Testimonials</small>
                        What Our Clients Say About Us
                        <small class="heading heading-solid center-block"></small>
                    </h1>
                </div>
                <!-- title end -->
                
                <div class="row">
                    
                    <div class="col-sm-12">                        
                        <div class="row">
                            
                            <div id="owlSectionThreeItem" class="owl-carousel">
                                    
                                <!-- Testimonial Item start -->
                                <div class="testimonial testimonial-triangle-isosceles bottom-left">
                                    <div class="testimonial-body">
                                        <p>
                                            Pasific template is the best template so far. So easy to customize and clean code. Recommended!
                                        </p>
                                    </div>
                                    <div class="testimonial-footer">
                                        <img src="assets_home/img/blog/photo-1.png" alt="testimonial author" class="img-responsive img-circle">
                                        <i class="fa fa-quote-left"></i>
                                        Martin Smith <a href="#">envato.com   </a>
                                    </div>
                                </div>
                                <!-- Testimonial Item end -->

                                <!-- Testimonial Item start -->
                                <div class="testimonial testimonial-triangle-isosceles bottom-left">
                                    <div class="testimonial-body">
                                        <p>
                                            Quisque mollis lacus augue, a hendrerit leo tristique vitae. Mauris non ipsum molestie sagittis elit ac vulputate odio.
                                        </p>
                                    </div>
                                    <div class="testimonial-footer">
                                        <img src="assets_home/img/blog/photo-1.png" alt="testimonial author" class="img-responsive img-circle">
                                        <i class="fa fa-quote-left"></i>
                                        Steve Austin <a href="#">facebook.com   </a>
                                    </div>
                                </div>
                                <!-- Testimonial Item end -->

                                <!-- Testimonial Item start -->
                                <div class="testimonial testimonial-triangle-isosceles bottom-left">
                                    <div class="testimonial-body">
                                        <p>
                                            Fusce quam augue, gravida tincidunt dui nec, tempor iaculis justo. 
                                        </p>
                                    </div>
                                    <div class="testimonial-footer">
                                        <img src="assets_home/img/blog/photo-1.png" alt="testimonial author" class="img-responsive img-circle">
                                        <i class="fa fa-quote-left"></i>
                                        Gisselse <a href="#">Smashingmagazine.com   </a>
                                    </div>
                                </div>
                                <!-- Testimonial Item end -->

                                <!-- Testimonial Item start -->
                                <div class="testimonial testimonial-triangle-isosceles bottom-left">
                                    <div class="testimonial-body">
                                        <p>
                                            Pasific template is the best template so far. So easy to customize and clean code. Recommended!
                                        </p>
                                    </div>
                                    <div class="testimonial-footer">
                                        <img src="assets_home/img/blog/photo-1.png" alt="testimonial author" class="img-responsive img-circle">
                                        <i class="fa fa-quote-left"></i>
                                        Martin Smith <a href="#">Smashingmagazine.com   </a>
                                    </div>
                                </div>
                                <!-- Testimonial Item end -->

                                <!-- Testimonial Item start -->
                                <div class="testimonial testimonial-triangle-isosceles bottom-left">
                                    <div class="testimonial-body">
                                        <p>
                                            Quisque mollis lacus augue, a hendrerit leo tristique vitae. Mauris non ipsum molestie sagittis elit ac vulputate odio.
                                        </p>
                                    </div>
                                    <div class="testimonial-footer">
                                        <img src="assets_home/img/blog/photo-1.png" alt="testimonial author" class="img-responsive img-circle">
                                        <i class="fa fa-quote-left"></i>
                                        Steve Austin <a href="#">envato.com   </a>
                                    </div>
                                </div>
                                <!-- Testimonial Item end -->

                                <!-- Testimonial Item start -->
                                <div class="testimonial testimonial-triangle-isosceles bottom-left">
                                    <div class="testimonial-body">
                                        <p>
                                            Fusce quam augue, gravida tincidunt dui nec, tempor iaculis justo. 
                                        </p>
                                    </div>
                                    <div class="testimonial-footer">
                                        <img src="assets_home/img/other/photo-4.jpg" alt="testimonial author" class="img-responsive img-circle">
                                        <i class="fa fa-quote-left"></i>
                                        Goselle <a href="#">themeforest.com   </a>
                                    </div>
                                </div>
                                <!-- Testimonial Item end -->

                            </div><!-- owlSectionThreeItem end -->
                        </div><!-- row end -->
                    </div><!-- col end -->
                    
                </div><!-- row end -->
            </div><!-- container end -->
        </div><!-- section testimonial end -->
        
          
        <!-- Contact Us Area
        =====================================-->
        <div id="contact" class="pt100 pb100 bg-grad-stellar">
            <div class="container">
                <div class="row">
                    
                    <div class="col-md-6">
                        <div class="row">
                            
                            <!-- title start -->
                            <div class="col-md-12 mb50">
                                <h1 class="font-size-normal color-light">
                                    <small class="color-light">Contact Us</small>
                                    Drop Us a Message
                                </h1>               
                                <h5 class="color-light">Please feel free to say anything to us. Our staff will reply any message<br>as soon as possible.</h5>                        
                            </div>
                            <!-- title end -->
                            
                            <!-- contact info start -->
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <span class="icon-map color-light el-icon2x"></span>
                                <h5 class="color-light"><strong>Address</strong></h5>
                                <p class="color-light">Houston, Texas, USA.</p>
                            </div>
                            
                            <div class="col-md-3 col-sm-3 col-xs-6">
                                <span class="icon-megaphone color-light el-icon2x"></span>
                                <h5 class="color-light"><strong>Phone</strong></h5>
                                <p class="color-light">855-34-LEARN (53276)</p>
                            </div>
                            
                            <div class="col-md-3 col-sm-3 col-xs-6">
                                <span class="icon-envelope color-light el-icon2x"></span>
                                <h5 class="color-light"><strong>Email</strong></h5>
                                <p class="color-light">support@tutorgigs.com</p>
                            </div>
                            <!-- contact info end -->
                            
                        </div><!-- row left end -->
                    </div><!-- col left end -->
                    
                    <div class="col-md-6">
                        <div class="contact contact-us-one">
                            <div class="col-sm-12 col-xs-12 text-center mb20">
                                <h4 class="pb25 bb-solid-1 text-uppercase">
                                    Get in Touch
                                    <small class="text-lowercase">Please complete the form and we will get back to you.</small>
                                </h4>
                            </div>
                            <form name="contactform" id="contactForm" method="post" action="assets_home/php/send.php">
                                
                                <!-- fullname start -->                            
                                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="senderName" id="senderName" class="input-md input-rounded form-control" placeholder="fullname" maxlength="100" required>
                                </div>                                           
                                <!-- fullname end -->
                                
                                <!-- email start -->                            
                                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                    <input type="email" name="senderEmail" id="senderEmail" class="input-md input-rounded form-control" placeholder="email address" maxlength="100" required>
                                </div>                                        
                                 <!-- email end -->
                                
                                <!-- website start -->                        
                                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                    <input type="url" name="senderWebsite" id="senderWebsite" class="input-md input-rounded form-control" placeholder="http://" maxlength="100">
                                </div>                                             
                                <!-- website end -->
                                
                                <!-- security start -->        
                                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="senderHuman" id="senderHuman" class="input-md input-rounded form-control" placeholder="" required>
                                    <input type="hidden" name="checkHuman_a" id="checkHuman_a">
                                    <input type="hidden" name="checkHuman_b" id="checkHuman_b">
                                </div>                                      
                                  <!-- security end -->
                                
                                <!-- textarea start -->
                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <textarea class="form-control" name="message" id="message" rows="7" required></textarea>
                                </div>
                                <!-- textarea end -->
                                
                                <!-- button start -->
                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <button type="submit" name="sendMessage" id="sendMessage" class="button button-md button-block button-grad-stellar">Send Message</button>
                                </div>
                                <!-- button end -->
                                
                                <div id="sendingMessage" class="statusMessage sending-message"><p>Sending your message. Please wait...</p></div>
                                <div id="successMessage" class="statusMessage success-message"><p>Thanks for sending your message! We'll get back to you shortly.</p></div>
                                <div id="failureMessage" class="statusMessage failure-message"><p>There was a problem sending your message. Please try again.</p></div>
                                <div id="incompleteMessage" class="statusMessage"><p>Please complete all the fields in the form before sending.</p></div>

                            </form>
                        </div><!-- div contact end -->
                    </div><!-- col end -->
                    
                </div><!-- row end -->
            </div><!-- container end -->            
        </div><!-- section contact end -->
        
       
        
        <!-- footer Area
        ===================================== -->
        <div id="footer" class="footer-two pt50">
            <div class="container-fluid bb-solid-1">
                <div class="container pb35">
                    <div class="row">
                        
                        <!-- footer about start -->
                        <div class="col-md-3 col-sm-12 col-xs-12">
                            <h6 class="font-montserrat text-uppercase color-dark">About Us</h6>
                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit morbi sagittis.
                            Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>
                        </div>
                        <!-- footer about end -->
                        
                        <!-- footer menu one start -->
                        <div class="col-md-2 col-md-offset-1 col-sm-3 col-xs-4">
                            <h6 class="font-montserrat text-uppercase color-dark">Menu</h6>
                            <ul class="no-icon-list">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">About</a></li>
                                <li><a href="#">Service</a></li>
                                <li><a href="#">Member</a></li>
                            </ul>
                        </div>
                        <!-- footer menu one end -->
                        
                        <!-- footer menu two start -->
                        <div class="col-md-2 col-sm-3 col-xs-4">
                            <h6 class="font-montserrat text-uppercase color-dark">Learn more</h6>
                            <ul class="no-icon-list">
                                <li><a href="#">Tour</a></li>
                                <li><a href="#">Pricing</a></li>
                                <li><a href="#">New Features</a></li>
                                <li><a href="#">Payment</a></li>
                            </ul>
                        </div>
                        <!-- footer menu two end -->
                        
                        <!-- footer menu three start -->
                        <div class="col-md-2 col-sm-3 col-xs-4">
                            <h6 class="font-montserrat text-uppercase color-dark">Support</h6>
                            <ul class="no-icon-list">
                                <li><a href="#">FAQs</a></li>
                                <li><a href="#">Knowledgebase</a></li>
                                <li><a href="#">Forum</a></li>
                                <li><a href="#">Contact Us</a></li>
                            </ul>
                        </div>
                        <!-- footer menu three end -->
                        
                        <!-- footer social icons start -->
                        <div class="col-md-2 col-sm-3 col-xs-12">
                            <h6 class="font-montserrat text-uppercase color-dark">Social Media</h6>
                            <div class="social social-two">
                                <a href="#"><i class="fa fa-twitter color-blue"></i></a>
                                <a href="#"><i class="fa fa-facebook color-primary"></i></a>
                                <a href="#"><i class="fa fa-linkedin color-blue"></i></a><br><br>
                                <a href="#"><i class="fa fa-github color-dark"></i></a>
                                <a href="#"><i class="fa fa-pinterest color-red"></i></a>
                            </div>
                        </div>
                        <!-- footer social icons end -->

                    </div><!-- row end -->
                </div><!-- container end -->
            </div><!-- container-fluid end -->
            
            <div class="container-fluid pt20">
                <div class="container">
                    <div class="row">

                        <!-- copyright start -->
                        <div class="col-md-6 col-sm-6 col-xs-6 pull-left">
                            <p>Copyright &copy;2021 <a href="#">Tutor Gigs, LLC 2018</a>. All rights reserved.</p>
                        </div>
                        <!-- copyright end -->

                        <!-- footer bottom start -->
                        <div class="col-md-6 col-sm-6 col-xs-6 pull-right">
                            <p class="text-right">
                                <a href="#" class="mr20">Privacy Policy</a>
                                <a href="#" class="mr20">Term of Use</a>
                                <a href="#" class="mr50">Site Map</a>
                            </p>
                        </div>
                        <!-- footer bottom end -->

                    </div><!-- row end -->
                </div><!-- container end -->
            </div><!-- container-fluid end -->
        </div><!-- footer end -->
        
        
        <!-- JQuery Core
        =====================================-->
        <script src="assets_home/js/core/jquery.min.js"></script>
        <script src="assets_home/js/core/bootstrap-3.3.7.min.js"></script>
        
        <!-- Magnific Popup
        =====================================-->
        <script src="assets_home/js/magnific-popup/jquery.magnific-popup.min.js"></script>
        <script src="assets_home/js/magnific-popup/magnific-popup-zoom-gallery.js"></script>
        
        <!-- Progress Bars
        =====================================-->
        <script src="assets_home/js/progress-bar/bootstrap-progressbar.js"></script>
        <script src="assets_home/js/progress-bar/bootstrap-progressbar-main.js"></script>        

        <!-- Textillate
        =====================================-->
        <script src="assets_home/js/textillate/jquery.fittext.js"></script>
        <script src="assets_home/js/textillate/jquery.lettering.js"></script>
        <script src="assets_home/js/textillate/jquery.textillate.js"></script>
        
        <!-- JQuery Main
        =====================================-->
        <script src="assets_home/js/main/jquery.appear.js"></script>
        <script src="assets_home/js/main/isotope.pkgd.min.js"></script>
        <script src="assets_home/js/main/parallax.min.js"></script>
        <script src="assets_home/js/main/jquery.countTo.js"></script>
        <script src="assets_home/js/main/owl.carousel.min.js"></script>
        <script src="assets_home/js/main/jquery.sticky.js"></script>
        <script src="assets_home/js/main/imagesloaded.pkgd.min.js"></script>
        <script src="assets_home/js/main/main.js"></script>       
        
    </body>
</html>