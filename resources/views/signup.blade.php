
<!DOCTYPE html>
<!--
Template Name: Metronic - Bootstrap 4 HTML, React, Angular 10 & VueJS Admin Dashboard Theme
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: https://1.envato.market/EA4JP
Renew Support: https://1.envato.market/EA4JP
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en">
	<!--begin::Head-->
	<head><base href="../../../">
		<meta charset="utf-8" />
		<title>Signup | Tutorgigs</title>
		<meta name="description" content="Login page example" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<link rel="canonical" href="https://keenthemes.com/metronic" />
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Page Custom Styles(used by this page)-->
		<link href="{{asset('assets/css/pages/login/login-4.css')}}" rel="stylesheet" type="text/css" />
		<!--end::Page Custom Styles-->
		<!--begin::Global Theme Styles(used by all pages)-->
		<link href="{{asset('assets/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('assets/plugins/custom/prismjs/prismjs.bundle.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('assets/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />
		<!--end::Global Theme Styles-->
		<!--begin::Layout Themes(used by all pages)-->
		<link href="{{asset('assets/css/themes/layout/header/base/light.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('assets/css/themes/layout/header/menu/light.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('assets/css/themes/layout/brand/dark.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('assets/css/themes/layout/aside/dark.css')}}" rel="stylesheet" type="text/css" />
		<!--end::Layout Themes-->
		<link rel="icon" type="image/png" sizes="32x32" href="{{asset('assets/img/favicons/favicon-32x32.png')}}">
                <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/img/favicons/favicon-16x16.png')}}">
                <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/img/favicons/favicon.ico')}}">
                <script src="https://www.google.com/recaptcha/api.js"></script>
<script>
  window.onload = function() {
    var $recaptcha = document.querySelector('#g-recaptcha-response');

    if($recaptcha) {
        $recaptcha.setAttribute("required", "required");
    }
};
$(document).ready(function(){
  $('#msg_section').hide();
  $("form").submit(function(){
    //alert("Submitted R"); return false;
  var confirm1= $('#signup_email').val();
  var confirm2= $('#confirm_signup_email').val();
     var msg='Error-<br/>';

  if(confirm1!=confirm2){
    $('#msg_section').show();
     msg='Email not matched';  
    // msg_section
    $('#msg_section').html(msg);
    return false;
  }else return true;
    //OK
    
  });
});


$(document).ready(function () {
  //called when key is pressed in textbox
  $("#phone").keypress(function (e) {
     //if the letter is not digit then display error and don't type anything
     if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
             return false;
    }
   });
});
</script>
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
		<!--begin::Main-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Login-->
			<div class="login login-4 wizard d-flex flex-column flex-lg-row flex-column-fluid wizard" id="kt_login">
				<!--begin::Content-->
				<div class="login-container d-flex flex-center flex-row flex-row-fluid order-2 order-lg-1 flex-row-fluid bg-white py-lg-0 pb-lg-0 pt-15 pb-12">
					<!--begin::Container-->
					<div class="login-content login-content-signup d-flex flex-column">
						<!--begin::Aside Top-->
						
						 @if ($message = Session::get('success'))
           <div class="alert alert-success alert-dismissable margin5" style="text-align: center">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                 <strong>{{ $message }}</strong>
            </div>
           @endif
            @if ($message = Session::get('error'))
           <div class="alert alert-danger alert-dismissable margin5" style="text-align: center">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                 <strong>{{ $message }}</strong>
            </div>
           @endif
						<!--begin::Signin-->
						<div class="login-form">
                                                    
							<!--begin::Form-->
                                                        <form class="form px-10"  id="kt_login_signup_form" method="post" action="{{url('submit_signup')}}">
							@csrf	
                                                            <!--begin: Wizard Step 1-->
								<div class="" data-wizard-type="step-content" data-wizard-state="current">
									<!--begin::Title-->
									<div class="pb-10 pb-lg-12" style="padding-top:3rem">
										<h3 class="font-weight-bolder text-dark font-size-h2 font-size-h1-lg">Create Account</h3>
										<div class="text-muted font-weight-bold font-size-h4">Already have an Account ?
										<a href="{{url('login')}}" class="text-primary font-weight-bolder">Sign In</a></div>
<hr>									
</div>
                                                                        <div class="row">
<div class="col-6">
									<!--begin::Title-->
									<!--begin::Form Group-->
									<div class="form-group">
										<label class="font-size-h7 font-weight-bolder text-dark">First Name</label>
                                                                                <input type="text" class="form-control form-control-solid h-auto py-4 px-4 border-0 rounded-lg font-size-h6" required="" name="f_name" placeholder="First Name" value="" />
									</div>
</div>
<div class="col-6">
									<!--end::Form Group-->
									<!--begin::Form Group-->
									<div class="form-group">
										<label class="font-size-h7 font-weight-bolder text-dark">Last Name</label>
                                                                                <input type="text" name="lname" class="form-control form-control-solid h-auto py-4 px-4 border-0 rounded-lg font-size-h6" required="" placeholder="Last Name" value="" />
									</div>
</div>
</div>
<div class="row">
<div class="col-6">
									<!--begin::Title-->
									<!--begin::Form Group-->
									<div class="form-group">
										<label class="font-size-h7 font-weight-bolder text-dark">Email</label>
                                                                                <input type="email" name="email" id="signup_email" class="form-control form-control-solid h-auto py-4 px-4 border-0 rounded-lg font-size-h6" required="" placeholder="Email" value="" />
									</div>
</div>
<div class="col-6">
									<!--end::Form Group-->
									<!--begin::Form Group-->
									<div class="form-group">
										<label class="font-size-h7 font-weight-bolder text-dark">Confirm Email</label>
                                                                                <input type="email" name="confirm_email"  id="confirm_signup_email" class="form-control form-control-solid h-auto py-4 px-4 border-0 rounded-lg font-size-h6" required="" placeholder="Confirm Email" value="" />
									</div>
</div>
</div>
<div class="row">
<div class="col-6">
									<!--begin::Title-->
									<!--begin::Form Group-->
									<div class="form-group">
										<label class="font-size-h7 font-weight-bolder text-dark">Mobile</label>
                                                                                <input name="phone" id="phone" class="form-control form-control-solid h-auto py-7 px-py-4 px-4 border-0 rounded-lg font-size-h6" placeholder="Mobile" required="" value="" />
									</div>
</div>
<div class="col-6">
									<!--end::Form Group-->
									<!--begin::Form Group-->
									<div class="form-group">
										<label class="font-size-h7 font-weight-bolder text-dark">Password</label>
                                                                                <input type="password" name="password" id="inputPassword" class="form-control form-control-solid h-auto py-4 px-4 border-0 rounded-lg font-size-h6" required="" placeholder="Password" value="" />
									</div>
</div>
</div>
<div class="row">
<div class="col-6">
									<!--begin::Title-->
									<!--begin::Form Group-->
									<div class="form-group">
										<div class="g-recaptcha" data-sitekey="6Lc3krsUAAAAAKnDeSlTaa2ggYc3hDtf9aY7Kiq-"></div>
									</div>
</div>


</div>
									<!--end::Form Group-->
								</div>

<div class="d-flex justify-content-between " style="float:right" >
									
									<div>
										
                                                                            <button type="submit" class="btn btn-primary font-weight-bolder font-size-h6 pl-8 pr-4 py-4 my-3" >Submit
										</button>
									</div>
								</div>
								<!--end: Wizard Step 1-->
								<!--begin: Wizard Step 2-->
								
								<!--end: Wizard Step 2-->
								<!--begin: Wizard Step 3-->
								
								<!--end: Wizard Step 5-->
								<!--begin: Wizard Actions-->
								
								<!--end: Wizard Actions-->
							</form>
							<!--end::Form-->
						</div>
						<!--end::Signin-->
					</div>
					<!--end::Container-->
				</div>
				<!--begin::Content-->
				<!--begin::Aside-->
				<div class="login-aside order-1 order-lg-2 bgi-no-repeat bgi-position-x-right" style="background:#ddd !important">
					<div class="login-conteiner bgi-no-repeat bgi-position-x-right bgi-position-y-bottom" style="background-image: url({{asset('assets/media/svg/illustrations/login-visual-4.svg')}});">
						<!--begin::Aside title-->

							<!--begin::Aside header-->
							
							<!--end::Aside header-->
							<!--begin: Wizard Nav-->
							
							<!--end: Wizard Nav-->
					
						<div class="d-flex flex-column-auto flex-column pt-lg-40 pt-15">
						<!--begin::Aside header-->
						<a href="#" class="text-center mb-10">
							<img src="{{asset('assets/img/logo.png')}}" class="max-h-70px" alt="" />
						</a>
						<!--end::Aside header-->
						<!--begin::Aside title-->
						<h3 class="font-weight-bolder text-center font-size-h4 font-size-h1-lg" style="color: #986923;">Discover Amazing Metronic
						<br />with great build tools</h3>
						<!--end::Aside title-->
					</div>
						<!--end::Aside title-->
					</div>
				</div>
				<!--end::Aside-->
			</div>
			<!--end::Login-->
		</div>
		<!--end::Main-->
		<script>var HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";</script>
		<!--begin::Global Config(global config for global JS scripts)-->
		<script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1400 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#3699FF", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#8950FC", "warning": "#FFA800", "danger": "#F64E60", "light": "#E4E6EF", "dark": "#181C32" }, "light": { "white": "#ffffff", "primary": "#E1F0FF", "secondary": "#EBEDF3", "success": "#C9F7F5", "info": "#EEE5FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#3F4254", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#EBEDF3", "gray-300": "#E4E6EF", "gray-400": "#D1D3E0", "gray-500": "#B5B5C3", "gray-600": "#7E8299", "gray-700": "#5E6278", "gray-800": "#3F4254", "gray-900": "#181C32" } }, "font-family": "Poppins" };</script>
		<!--end::Global Config-->
		<!--begin::Global Theme Bundle(used by all pages)-->
		<script src="{{asset('assets/plugins/global/plugins.bundle.js')}}"></script>
		<script src="{{asset('assets/plugins/custom/prismjs/prismjs.bundle.js')}}"></script>
		<script src="{{asset('assets/js/scripts.bundle.js')}}"></script>
		<!--end::Global Theme Bundle-->
		<!--begin::Page Scripts(used by this page)-->
		<script src="{{asset('assets/js/pages/custom/login/login-4.js')}}"></script>
		<!--end::Page Scripts-->
	</body>
	<!--end::Body-->
</html>